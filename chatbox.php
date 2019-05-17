<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatbox</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Caveat+Brush"
        rel="stylesheet"
    />
</head>
<body>
    <div class="chatbox">
    <?php
        session_start();
        $id = $_SESSION['id'];
        $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
        $friend_email = $_GET['email'];
        $friend_query = "SELECT ID,name FROM USERS WHERE email='$friend_email'";
        $friend_ID = ($conn->query($friend_query))->fetch_assoc();
        $friend_name = $friend_ID['name'];
        echo("<h1>$friend_name</h1>");
        $friend_ID = $friend_ID['ID'];
        $chat_query = "SELECT * FROM CHAT WHERE (sender_ID = '$friend_ID' AND receiver_id = '$id') OR (sender_ID = '$id' AND receiver_id = '$friend_ID') ";
        $result = $conn->query($chat_query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['sender_ID']==$id){
                    echo('<div class="message mine">');
                    echo('<div class="content">'. $row['content'] .'</div>' );
                    echo('<div class="time">'. $row['date_time'] .'</div>' );
                    echo('</div>');
                } else {
                    echo('<div class="message other">');
                    echo('<div class="content">'. $row['content'] .'</div>' );
                    echo('<div class="time">'. $row['date_time'] .'</div>' );
                    echo('</div>');
                }
            }
        }
    
    echo('<form class="insertbox" action="chatinsert.php" method="post">');
        echo('<input type="text" id="content" name="chat_content" placeholder="Enter your chat here" required>');
        echo("<input type='hidden' name='sender_ID' value='$id'>");
        echo("<input type='hidden' name='receiver_ID' value='$friend_ID'>");
        echo("<input type='hidden' name='email' value='$friend_email'>");
        echo('<input type="submit" value="Send">');
    echo('</form>');
    ?>
    </div>
</body>
</html>