<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Caveat+Brush"
        rel="stylesheet"
    />
    <title>Chat box</title>
</head>
<body>
    <div class="header">
        <a class="btn" href="logout.php">Logout</a>
        <a class="btn" href="edit.php">Edit</a>
        <a class="btn" href="profile.php">Profile</a>
    </div>
    <ul class="friends_list">
    <?php
    
        session_start();
        $id = $_SESSION['id'];
        $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
        $friends = "SELECT * FROM USERS WHERE id != '$id'";
        $result = $conn->query($friends);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $email = $row['email'];
                $name = $row['name'];
                echo("<li><a href='/mini-facebook/chatbox.php?email=$email'>$name</a></li>");
            }
        } 
    ?>
    </ul>
</body>
</html>