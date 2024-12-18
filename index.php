<?php

session_start();
if(isset($_SESSION['auth']))
{
    $_SESSION['status'] = "Vous êtes déjà connecté";
    header('Location: admin/index.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style-login.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #141e30;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                
            <div class="login-box">
            <img src="assets/logo-alfia.png" alt="logo">
                <?php
                        include('message.php');
                    ?>
            <form action="logincode.php" method="POST" class="form">
            <div class="user-box">
                <input type="email" name="email" id="typeEmailX-2" class="input" require>
                <label class="label" for="">Email</label>
            </div>
            <!-- /.user-box -->
            <div class="user-box">
                <input type="password" name="password" id="typePasswordX-2" class="input" require>
                <label class="label" for="">Password</label>
            </div>
            <!-- /.user-box -->
            <button class="btn btn-login"  name="login_btn" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            </form>
            <!-- /form -->
        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
