<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>



    <h2>Registration Form</h2>
    <form action="process.php" method="post">
        <label for="">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="">Username:</label>
        <input type="text" name="user_name" required>

        <label for="">Email:</label>
        <input type="text" name="email" required>

        <select name="gender" required>
            <option value="">Select gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>

        </select>

        <label for="">Password:</label>
        <input type="password" name="pass">
        <label for="">Confirm password:</label>
        <input type="password" name="confirm_pass">



        </select><br>
        <input type="submit" value="Register" name="save_user" id="register">

    </form>
</body>

</html>