<?php
    $conn = mysqli_connect('localhost', 'admin', 'drumil', 'php_assignment');
    session_start();
    $id = $_SESSION['id'];
    $name =  mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['Age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES["Images"]["name"]);
    move_uploaded_file($_FILES["Images"]["tmp_name"], $target_file);    
    $image=basename( $_FILES["Images"]["name"],".jpeg");
    $update_query = "update USERS SET name = '$name', age = '$age', email = '$email', phone = '$phone', password = '$password', Images = '$image' where id = '$id'";
    mysqli_query($conn, $update_query);
    header("location:/mini-facebook/profile.php")
?>