<?php
require_once('../model/userModel.php');
session_start();
 
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
 
    // Call the ForgotUserPassword function
    $change_result = ForgotUserPassword($email, $password, $confirm_password);
 
    if($change_result === true) {
        // Password changed successfully, redirect to login page
        header('Location: ../view/UserLogin.php');
        exit();
    } else {
        // Password change failed, display error message
        echo $change_result;
    }
}
?>