<?php
session_start();
include('assets/config/dbcon.php');
if(isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $collection = $database->selectCollection('users');
    $user = $collection->findOne(['email' => $email, 'password' => $password]);

    if ($user) {
        $admin_id = $user['_id'];
        $user_name = $user['username'];
        $user_email = $user['email'];
        $job = $user['job'];
        $role = $user['role'];

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'admin_id' => $admin_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
            'job' => $job,
            'role' => $role
        ];

        if ($role === "utilistateur") {
            $_SESSION['status'] = "Logged In Successfully";
            header('Location: user/index.php', true);
        } else if ($role === "admin") {
            $_SESSION['status'] = "Logged In Successfully";
            header('Location: admin/index.php', true);
        }
    }else {
        $_SESSION['status'] = "Access Denied";
        header('Location: index.php');
    }
}


