<?php
require_once('../model/adminModel.php');
session_start();

if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];
    
    // Call the ChangeAdminPassword function
    $change_result = ChangeAdminPassword($current_password, $new_password, $confirm_new_password);

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
