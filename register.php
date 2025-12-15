<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Registration</title>
    </head>
<body>
    <?php
    require "user.php";
    $user =new User();

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];


        $message = $user->register($user,$password);
        echo $message." <a href='login.php'>Log in here!</a>";

    }
    ?>
    <br>
    <br>
    <form method="POST" action="register.php">
Usename: <input type="text" placeholder="Username" name="username"> <br>
Password: <input type="text" placeholder="Password" name="password"> 
<br>
<button type = "submit">Register</button>


</form>
</body>
</html>