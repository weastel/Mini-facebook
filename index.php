<?php
    session_start();
    if(!empty($_SESSION['id'])){
        header("location:/mini-facebook/profile.php");
    }else if(!empty($_COOKIE['id'])){
        $_SESSION['id'] = $_COOKIE['id'];
        header("location:/mini-facebook/profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Caveat+Brush"
        rel="stylesheet"
    />
</head>
<body>
    <form action="login.php" method="POST">
        <label for="Email"> Email:- <input type="text" name="Email" > </label>
        <label for="Password"> Password:- <input type="password" name="Password" > </label>
        <label for="remember"> Rememeber me:- <input type="checkbox" name="remember" id=""></label>
        <input type="submit" id="submit" />
        <button><a href="/mini-facebook/register.php">Register</a></button>
    </form>
</body>
</html>