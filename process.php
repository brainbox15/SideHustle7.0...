<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php' ?>
    <?php

    // REGISTER USER
    if (isset($_POST['save_user'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];


        // confirming pass & confrirm pass matches.
        if ($pass !== $confirm_pass) {
            exit("<p>password do not match</p><a href='register.php'>Go back</a</p>");
        }

        // checking if email already exist
        $email_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($email_exist) > 0) {
            exit("<p>email already exist</p><a href='index.php'>login</a>");

        }

        //   checking if username already exist
        $username_exist = mysqli_query($connect, "SELECT * FROM users WHERE user_name = '$user_name'");
        if (mysqli_num_rows($username_exist) > 0) {
            exit("<p>User name already exist</p><a href='register.php'>Go back</a>");

        }

        // encrypting password
        $cryptic_pass = md5($pass);


        // inserting data into database.
        $insert_user = mysqli_query($connect, "INSERT INTO users( first_name, last_name, user_name, email, gender, password) VALUES( '$first_name','$last_name', '$user_name', '$email', '$gender', '$cryptic_pass')");
        if ($insert_user) {
            header("location: all-users.php");
        }

    }



    ?>
</body>

</html>