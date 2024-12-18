<?php
include('config.php'); 

     if(isset($_GET['id'])){
        $id = $_GET['id'];
        
     $query = "INSERT INTO `formation`
     SELECT * from `participant` WHERE `id_participant` = $id ";

      $run = mysqli_query($con,$query);  
      if ($run) {
        $_SESSION['status'] = "data  enregistre";
        header('location:../data-formation.php');
     } else {
        header('location:../data-formation.php');
     }
 

}

  
 ?>  