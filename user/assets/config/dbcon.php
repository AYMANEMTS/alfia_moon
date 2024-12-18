<?php

$host = "Localhost";
$username = "alfia";
$password = "W2pCZifYhJfkNLeR";
$database = "alfia";

//Connect to database :
$con = mysqli_connect($host, $username, $password, $database);

//Check Connection : 
if(!$con)
{
    //header("Location: ../errors/db.php");
    die(mysqli_connect_error($con));
}
//else{
//    echo "Database Connected.!";
//}

?>