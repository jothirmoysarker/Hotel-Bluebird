<?php
require_once('../model/adminModel.php');
session_start();

if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Call the changeAdminPassword function
    $change_result = ForgotAdminPassword($code, $password, $confirm_password);

    if($change_result === true) {
        // Password changed successfully, redirect to login page
        header('location:../view/AdminLogin.php');
        exit();
    } else {
        // Password change failed, display error message
        echo $change_result;
    }
}
?>
