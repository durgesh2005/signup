<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login form</title>
</head>
<body>
     <h1>Login Form</h1>
     <form action="login-submit.php" method="post">
     <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="a@gmail.com"><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="12345678"><br><br>
    <input type="submit" value="Submit">
     </form>
</body>
</html>