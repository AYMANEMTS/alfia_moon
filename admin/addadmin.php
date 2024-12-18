<?php include('../assets/config/dbcon.php');
include('add-user.php'); 

if (isset($_POST['submit'])){
    $fullname = $_POST['full_name'];
    $job = $_POST['job'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check_email = $collection->findOne(array('email' => $email));
    $error = array();

    if (empty($fullname)) {
        $error['1'] = 'Entrer le nom complet';
    } else if (empty($job)) {
        $error['1'] = 'Entrer Fontion';
    } else if (empty($email)) {
        $error['1'] = 'Entrer Email';
    } else if (empty($password)) {
        $error['1'] = 'Entrer mot pass';
    } else if (empty($role)) {
        $error['1'] = 'choisie le role';
    } else if ($check_email) {
        $error['1'] = "Email already taken";
    }

    $output = "" ;

    if(isset($error['1'])) {
        $output.= "<script> alert(" .$error['1']."); </script>";
    }else{
        $output .= "";
    }

    if (count($error) < 1){
        $data = [
            'username' => $fullname,
            'email' => $email,
            'password' => $password,
            'job' => $job,
            'role' => $role
        ];
        try {
            $insertResult = $collection->insertOne($data);

            if ($insertResult->getInsertedCount() === 1) {
                $output .= "<script> alert('Done'); </script>";
            } else {
                $output .= "<script> alert('Error'); </script>";
            }
        } catch (Exception $e) {
            $output .= "<script> alert('Error: " . $e->getMessage() . "'); </script>";
        }
    }
}
 
?>