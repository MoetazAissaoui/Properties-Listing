<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleSearch.css">
    <title>Search</title>
</head>

<!-- -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ -->



<body>

    <!-- -------------------------------------- WELCOME "INSERT FIRST NAME" TEXT ------------------------------------------------------ -->

    <header>

        <div class="navbar">
            <div class="wel">
                <?php
                if(isset($_SESSION['firstname']))
                echo "<h3>Welcome <b>" . $_SESSION['firstname']." ". $_SESSION['lastname']."!</b>  Looking For Some <span> Deals </span> Today ?<br>
                Use Our <span> Search Engine</span> To Find What Does Suit You And <span> We''ll Take Care</span> Of
                The Rest</h3>";
                else
                echo "<h3>Please Login If You are Looking For Some <span> Deals </span> </h3>";
                ?>
                
            </div>
        </div>

    </header>
    <div class="all">

        <!-- --------------------------------------------FILTER LIST--------------------------------------------------------------- -->
        <form method="POST">
        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                       
                        <!-- ----------------------CATEGORIES ( APPARTEMENT , VILLA , ....)------------------------ -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#/" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true"
                                    aria-expanded="false" class="collapsed">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h5 class="title">Categories</h5>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse_aside2">
                                <div class="card-body">
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Appartement" name="category">
                                        <span class="btn btn-light">Appartement</span>
                                    </label> <label class="checkbox-btn">
                                        <input type="radio" value="Studio" name="category">
                                        <span class="btn btn-light">Studio</span>
                                    </label>
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Villa" name="category">
                                        <span class="btn btn-light">Villa</span>
                                    </label> <label class="checkbox-btn">
                                        <input type="radio" value="Farmhouse" name="category">
                                        <span class="btn btn-light">Farmhouse</span>
                                    </label>
                                </div>
                            </div>
                        </article>

                        <!-- ----------------------PRICE---------------------------------------------------------------------- -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#/" data-toggle="collapse" data-target="#collapse_aside3" data-abc="true"
                                    aria-expanded="false" class="collapsed">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h5 class="title">Price </h5>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse_aside3">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input class="form-control" placeholder="0 TND" type="number" name="min">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Max</label>
                                            <input class="form-control" placeholder="2 000 000 TND" type="number"
                                                name="max">
                                        </div>
                                    </div>
                                    <input class="highlight-button btn btn-medium" type="submit" value="Apply Now"
                                        name="apply">

                                </div>
                            </div>
                        </article>

                        <!-- ----------------------LOCATION---------------------------------------------------------------- -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#/" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true"
                                    aria-expanded="false" class="collapsed">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h5 class="title">Location</h5>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse_aside4">
                                <div class="card-body">
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Ariana" name="place">
                                        <span class="btn btn-light">Ariana</span>
                                    </label> <label class="checkbox-btn">
                                        <input type="radio" value="Tunis" name="place">
                                        <span class="btn btn-light">Tunis</span>
                                    </label>
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Mannouba" name="place">
                                        <span class="btn btn-light">Mannouba</span>
                                    </label>
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Ben Arous" name="place">
                                        <span class="btn btn-light">Ben Arous</span>
                                    </label>
                                    <label class="checkbox-btn">
                                        <input type="radio" value="Bizerte" name="place">
                                        <span class="btn btn-light">Bizerte</span>
                                    </label>
                                </div>
                            </div>
                        </article>

</div>
                    <!-- ----------------------SELL BUTTON -> OPEN MODAL ( SELL PROPERTY FORMULAIRE)--------------------------- -->
                    
                    <a href="#/" class="highlight-button btn btn-medium" data-abc="true" id="sell">Sell Your
                        Property</a>
                    
                    
                    <input type="submit" name ="search" class="highlight-button btn btn-medium" data-abc="true" id="sell" value="Search Now">
        
                </div>
                </form>


               
                <!------------------------------------------------------------ End Filter List ------------------------------------ -->


                <!-- ----------------------------------------------HOUSES SHOWCASE--------------------------------------------------- -->
                <div class="col-md-9">
                    <div class="row g-2">

                <?php

                    $query = " SELECT * FROM PROPERTIES ";

                    if ( (isset($_POST["search"]) || isset($_POST["apply"])) && isset($_SESSION["firstname"]) ) 
                    {  
                        if (isset($_POST["category"]) && isset($_POST["place"]))
                        {
                            $query = "SELECT * FROM PROPERTIES WHERE "."categorie = '".strtoupper($_POST["category"])."'"." AND location = '".strtoupper($_POST["place"])."'";
                        }

                        if (isset($_POST["category"]) && isset($_POST["place"]) && isset($_POST["apply"]))
                        {
                            $query = "SELECT * FROM PROPERTIES WHERE "."categorie = '".strtoupper($_POST["category"])."'"." AND location = '".strtoupper($_POST["place"])."'"." AND PRICE BETWEEN '".$_POST["min"]."' and '".$_POST["max"]. "'";
                        }

                        if (isset($_POST["category"]) && isset($_POST["place"]) )
                        {
                            $query = "SELECT * FROM PROPERTIES WHERE "."categorie = '".strtoupper($_POST["category"])."'"." AND location = '".strtoupper($_POST["place"])."'";
                        }

                        if (isset($_POST["category"]) && !isset($_POST["place"]))
                        {
                            $query = "SELECT * FROM PROPERTIES WHERE "."categorie = '".strtoupper($_POST["category"])."'";
                        }

                        if (!isset($_POST["category"]) && isset($_POST["place"]))
                        
                        {
                            $query = "SELECT * FROM PROPERTIES WHERE location = '".strtoupper($_POST["place"])."'";
                        }
                        
                        if (isset($_POST["search"]) && isset($_POST["apply"]))
                        {
                            $query .= " PRICE BETWEEN '".$_POST["min"]."' and '".$_POST["max"]. "'";
                        }

                        

                        if (isset($_POST["apply"]) && !isset($_POST["search"]))
                        {
                            $query = " SELECT * FROM PROPERTIES WHERE PRICE BETWEEN '".$_POST["min"]."' and '".$_POST["max"]. "'";
                        }

                        $con = mysqli_connect("localhost","root","","agence") or die ("erreur");

                        //echo $query;

                        $result = mysqli_query($con,$query);

                                                if (mysqli_num_rows($result) == 0 )
                            {
                            echo '
                            <div class="col-md-6">
                                <div class="house">
                                    <div class="about text-center">
                                        <h6>There is no Properties With mentioned crtiteria !</h6>
                                    </div>
                                </div>
                            </div> 
                                ';
                            }else
                            {

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    
                                    echo '
                                    <div class="col-md-6">
                                        <div class="house">
                                            <div class="text-center"> <img alt="no image" src="./'.$row["photo"].'" width="200"> </div>
                                            <div class="about text-center">
                                                <h5>'.$row["title"].'</h5> <span>'.$row["price"].' TND</span>
                                                <h6>Contact us if you\'re intrested .</h6>
                                            </div>
                                        </div>
                                    </div> 
                                        ';
                                }


                    
                            }
                        }
                    if ((!isset($_POST["search"]) && !isset($_POST["apply"]) ) && isset($_SESSION["firstname"]))
                    {                        
                        $con = mysqli_connect("localhost","root","","agence") or die ("erreur");

                        $query = "SELECT * FROM PROPERTIES;";

                        $result=mysqli_query($con,$query);

                        if (mysqli_num_rows($result) == 0 )
                            {
                            echo '
                            <div class="col-md-6">
                                <div class="house">
                                    <div class="about text-center">
                                        <h6>There is no Properties</h6>
                                    </div>
                                </div>
                            </div> 
                                ';
                            }else
                            {

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    
                                    echo '
                                    <div class="col-md-6">
                                        <div class="house">
                                            <div class="text-center"> <img alt="no image" src="./'.$row["photo"].'" width="200"> </div>
                                            <div class="about text-center">
                                                <h5>'.$row["title"].'</h5> <span>'.$row["price"].' TND</span>
                                                <h6>Contact us if you\'re intrested .</h6>
                                            </div>
                                        </div>
                                    </div> 
                                        ';
                                }

                            }
                        } elseif (!isset($_SESSION["firstname"])){
                            echo '
                            <div class="col-md-6">
                                <div class="house">
                                    <div class="about text-center">
                                        <h6 style="color:red">You must be logged-in to see listing properties</h6>
                                    </div>
                                </div>
                            </div> 
                                ';
                        }
                    

                    

                ?>

                      


                        
                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --------------------------------END HOUSES ------------------------------------------------------------------------- -->


    <!-- ----------------------MODAL SELL YOUR PROPERTY-------------------------------------------------------------------------- -->
    <form method="POST" name="sellmodal" action="addproperty.php" enctype = "multipart/form-data">

    <div class="sell-house hidden">

        <div class="sell-house-container">
            <button class="close-sell-house">&times;</button>
            <h2>Please Fill this Form and we will review your request !</h2>
                <label>What Do You Want To Sell ?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="Appartement" required>
                    <label class="form-check-label" for="inlineRadio1">Appartment</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="Studio" required>
                    <label class="form-check-label" for="inlineRadio2">Studio</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="Villa" required>
                    <label class="form-check-label" for="inlineRadio3">Villa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                        value="Farmhouse" required>
                    <label class="form-check-label" for="inlineRadio4">Farmhouse</label>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">TITLE ?</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput2" placeholder="Type Here"
                        required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">How Much Do You Want For It ?</label>
                    <input type="text" class="form-control" name="price" id="formGroupExampleInput3" placeholder="TND" required>
                </div>
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1"
                        value="Tunis" required>
                    <label class="form-check-label" for="inlineRadio1">Tunis</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2"
                        value="Ariana" required>
                    <label class="form-check-label" for="inlineRadio2">Ariana</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3"
                        value="Mannouba" required>
                    <label class="form-check-label" for="inlineRadio2">Manouba</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4"
                        value="Ben Arous" required>
                    <label class="form-check-label" for="inlineRadio2">Ben Arous</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio5"
                        value="Bizerte" required>
                    <label class="form-check-label" for="inlineRadio2">Bizerte</label>
                </div>
                <div class="custom-file float-right">
                    <label class="custom-file-label" for="customFile" id="labelProperty">Upload Your Property's Photos
                    </label>
                    <input type="file" class="custom-file-input" id="image" name = "image">

                </div>
                <input type="submit" name ="send" class="highlight-button btn btn-medium" id="send"></button>



    </form>


    </div>
    </div>
    <div class="overlay hidden"></div>

    <script src="scriptSearch.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>

<!-- -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ -->