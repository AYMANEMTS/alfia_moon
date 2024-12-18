<?php 
include('./athentification.php');

    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status'] = " Déconnexion réussie";
    header('Location: ../index.php');
    exit(0);
?>