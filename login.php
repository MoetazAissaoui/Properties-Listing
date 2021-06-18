<?php

session_start();


if (isset($_POST["email"]))
{
    $con = mysqli_connect("localhost","root","","agence") or die ("erreur");

    $query= "
    SELECT * FROM USERS 
    WHERE email = '".$_POST["email"]."'
    AND password = '".$_POST["password"]."';
    ";

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0 )
    {
        $query = "
        SELECT firstname , lastname FROM USERS
        WHERE
        email = '".$_POST["email"]."'; 
        ";
        
        $result = mysqli_query($con,$query);

        $row = mysqli_fetch_assoc($result);

        $_SESSION["email"] = $_POST["email"];
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];

        echo "Yes";
        header('Location: index.php');

    }else
    {
        echo "No";
    }
}


?>