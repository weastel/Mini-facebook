<?php
    $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
    session_start();
    $id = $_SESSION['id'];
    $name =  $_POST['name'];
    $age = $_POST['Age'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $update_query = "update USERS SET name = '$name', age = '$age', email = '$email', phone = '$phone', password = '$password' where id = '$id'";
    $conn->query($update_query);
    header("location:/mini-facebook/profile.php")
?>