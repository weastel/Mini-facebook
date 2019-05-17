<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Form Submission</title>
        <link rel="stylesheet" href="styles.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Caveat+Brush"
            rel="stylesheet"
        />
    </head>
    <body>
        <form
            name="IMGForm"
            action="updateuser.php"
            onsubmit="validateForm()"
            method="POST"
        >
            <?php
                session_start();
                $id = $_SESSION['id'];
                $conn = new mysqli('localhost', 'admin', 'drumil', 'php_assignment');
                $profile = "SELECT * from USERS where id = '$id'";
                $profile_content = ($conn->query($profile))->fetch_assoc();
                echo("<label for='name'>Name :- <input type='text' name='name' value='$profile_content[name]' /></label>");
                echo("<div class='error' id='nameError'></div>");
                echo("<label id='phoneNumberLabel' for='phoneNumber'>Phone :-<input type='number' name='phoneNumber' value='$profile_content[phone]' /></label>");
                echo('<div class="error" id="phoneError"></div>');
                echo("<label id='Agelabel' for='Age'>Age:- <input type='number' name='Age' value='$profile_content[age]' /></label>");
                echo("<label for='email'>Email :-<input type='email' name='email' value='$profile_content[email]' /></label>");
                echo('<div class="error" id="emailError"></div>');
                echo("<label for='password'>Password :-<input type='password' name='password' value='$profile_content[password]' /></label>");
                echo("<label for='confirmPassword'>Confirm Password :-<input type='password' name='confirmPassword' value='$profile_content[password]' /></label>");
                echo('<div class="error" id="confirmError"></div>');
                echo('<input type="submit" id="submit" />');
                echo('<label for="admin" class="hidden">Admin :- <input type="checkbox" name="admin" id="admin" /></label>');
            ?>    
        </form>

        <script src="script.js"></script>
    </body>
</html>
