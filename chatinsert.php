<?php
    $sender_ID = $_POST['sender_ID'];
    $receiver_ID = $_POST['receiver_ID'];
    $content = $_POST['chat_content'];
    $friend_email = $_POST['email'];
    $insert_query = "INSERT INTO CHAT (sender_ID, receiver_ID, content) values ('$sender_ID', '$receiver_ID', '$content')";
    $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
    $conn->query($insert_query);
    header("location:/mini-facebook/chatbox.php?email=" . $friend_email);
?>