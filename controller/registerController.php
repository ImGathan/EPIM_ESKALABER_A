<?php 

include "../config/connection.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $connect->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $email, $password);

    if($stmt->execute()) {
        echo 'register berhasil';
        $_SESSION['user_id'] = $stmt->id;
        header("Location: ../views/landingpage.php");
    } else {
        echo $stmt->error;
    }
}