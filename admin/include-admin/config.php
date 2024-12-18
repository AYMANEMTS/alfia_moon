<?php

$host = "Localhost";
$username = "u903870915_alfiaapp";
$password = "Alfiaapp@12345678";
$database = "u903870915_alfiaapp";

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