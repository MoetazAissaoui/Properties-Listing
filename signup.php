<?php

session_start();

// check if signup request is made
if (isset($_POST["email"]))
{

//connect db

$con=mysqli_connect("localhost","root","","agence") or die("erreur");

$query = "
INSERT INTO `users` 
(`id`, `firstname`, `lastname`, `email`, `dob`, `location`, `gender`, `password`)
VALUES (NULL, '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["dob2"]."', '".$_POST["loc"]."', '".strtoupper($_POST["gender"])."', '".$_POST["password"]."');
";

$result = mysqli_query($con,$query);

if (mysqli_affected_rows($con) > 0)

{
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    
    echo "Yes";
    header('Location: index.php');
} else{
    echo "No";
}

}


?>