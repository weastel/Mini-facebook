<?php
    session_start();
    if(empty($_SESSION['id']))
    {
        header("location:/mini-facebook/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Caveat+Brush"
        rel="stylesheet"
    />
</head>
<body>
    <div class="header">
        <a class="btn" href="logout.php">Logout</a>
        <a class="btn" href="edit.php">Edit</a>
        <a class="btn" href="chat.php">Friends</a>
    </div>
    <div class="profile">
        <?php
            session_start();
            $id = $_SESSION['id'];
            $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
            $profile = "SELECT * from USERS where id = '$id'";
            $profile_content = ($conn->query($profile))->fetch_assoc();
            echo("<img src='images/".$profile_content['Images']."' >");
            echo("Name:- <div> $profile_content[name] </div> <br>");
            echo("Email:- <div> $profile_content[email] </div> <br>");
            echo("Age:- <div> $profile_content[age] </div> <br>");
            echo("Phone:- <div> $profile_content[phone] </div> <br>");

        ?>
    </div>
    
</body>
</html>