<?php
    $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     
    $account_check = "SELECT email FROM USERS ";
    $result = $conn->query($account_check);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ( $_POST["email"] == $row['email']){
                die("user already exists");
            }
        }
    } 
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["Age"];
    $phoneNumber =  $_POST["phoneNumber"];
    $password = $_POST["password"];
    $register = "INSERT INTO USERS (name, email, phone, age, password) values ('$name', '$email', '$phoneNumber', '$age', '$password')";
    if ($conn->query($register)){
        echo("user created");
    }
    $id = ($conn->query("select id from USERS where email = '$email'"))->fetch_assoc();
    session_start();
    $_SESSION["id"] = $id['id'];
    
    header("Location: http://localhost/mini-facebook/profile.php");
?>