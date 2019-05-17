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
            action="collection.php"
            onsubmit="validateForm()"
            method="POST"
        >
            <label for="name"
                >Name :-
                <input type="text" name="name" />
            </label>
            <div class="error" id="nameError"></div>
            <label id="phoneNumberLabel" for="phoneNumber"
                >Phone :-
                <input type="number" name="phoneNumber" />
            </label>
            <div class="error" id="phoneError"></div>
            <label id="Agelabel" for="Age"
                >Age:-
                <input id="" type="number" name="Age" />
            </label>
            <label for="email">
                Email :-
                <input type="email" name="email" />
            </label>
            <div class="error" id="emailError"></div>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male" />Male<br />
                <input type="radio" name="gender" value="female" />Female<br />
            </fieldset>
            <label for="password"
                >Password :-
                <input type="password" name="password" />
            </label>
            <label for="confirmPassword"
                >Confirm Password :-
                <input type="password" name="confirmPassword" />
            </label>
            <div class="error" id="confirmError"></div>
            <input type="submit" id="submit" />
            <label for="admin" class="hidden"
                >Admin :- <input type="checkbox" name="admin" id="admin" />
            </label>
        </form>

        <script src="script.js"></script>
    </body>
</html>
