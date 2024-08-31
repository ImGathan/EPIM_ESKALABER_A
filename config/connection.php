<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'backend-epim';

$con = new mysqli($server, $username, $password, $db_name);

if($con->error) {
    echo 'Error: ' $con->error;
}