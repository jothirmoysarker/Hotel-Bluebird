<?php
require_once('../model/rooombookModel.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

print_r($_POST); 

$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;
$bedtype = $_POST['bed_type'] ?? null; 
$roomtype = $_POST['room_type'] ?? null; 
$price = $_POST['room_price'] ?? null; 

if (empty($username) || empty($email) || empty($phone) || empty($bedtype) || empty($roomtype) || empty($price)) {
    echo "Fill in all the boxes";
} else {
    $status = bookRoom($username, $email, $phone, $bedtype, $roomtype, $price);
    if ($status) {
        header('Location: ../view/UserDashboard.php');
        exit;
    } else {
        echo "Database error. Please try again.";
    }
}
?>
