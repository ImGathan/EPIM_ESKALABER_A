<?php 

include '../config/connection.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT id, password WHERE $email";
    if(password_verify($password)) {
        echo "berhasil login"
    } else {
        echo 'error'
    }
}