<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

    body{
        background-color:  darkslategrey;
    }

  </style>
</head>
<body>

<?php

error_reporting(0);
error_log(0);

$target_dir = "img/";

if(isset($_POST["send"])){


  $con = mysqli_connect("localhost","root","","agence") or die ("erreur");

  $imgpath = "/img/noimage.png";

  if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"img/".$file_name);
       $imgpath="img/".$file_name;
    }else{
       print_r($errors);
    }
 }



  $query="
  INSERT INTO `properties`
  (`id`, `categorie`, `title`, `price`, `location`, `photo`)
  VALUES 
  (NULL, '".strtoupper($_POST["inlineRadioOptions"])."', '".strtoupper($_POST["title"])."', '".strtoupper($_POST["price"])."', '".strtoupper($_POST["inlineRadioOptions2"])."', '".$imgpath."');";

  $result=mysqli_query($con,$query);

  if (mysqli_affected_rows($con) > 0)
  {
    echo '
    <!-- Flexbox container for aligning the toasts -->
  <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
  
      <!-- Then put toasts within -->
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
  
          <strong class="mr-auto">Alert</strong>
          <small>1 min ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="false">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Your property has been listed successfuly.
        </div>
      </div>
    </div>
  
  <script>
  $(document).ready(function(){
    $(\'.toast\').toast(\'show\');
  });
  </script>';
  
  echo "<script>
  setTimeout(function(){
     window.location.href = './index.php';
  }, 2000);
</script>";


  }




}

?>

</body>
</html>
