<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'backend-epim';


$connect = new mysqli($server, $username, $password, $db_name);

if($connect->error) {
    echo 'error'. $connect->error;
} else {
    echo "berhasil";
}