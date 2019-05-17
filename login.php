<?php
    $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $password_query = "SELECT * from USERS where email='$email'";
    $result = $conn->query($password_query);
    if ($result->num_rows == 0) {
        die("User does not exists");
    } 
   
    $real_password = ($result)->fetch_assoc();
    if ($password == $real_password['password']){
        session_start();
        if(!empty($_POST["remember"])){
            $id = $real_password['id']; 
            setcookie("id", $id);
        }
        $_SESSION['id'] = $real_password['id'];
        header("location:/mini-facebook/profile.php") ;
    } else {
        header("location:/mini-facebook/index.php");
    }
?>