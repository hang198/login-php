<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
    .login {
        margin: 0;
        border: 1px solid gray;
        height: 200px;
        width: 200px;
        padding: 10px;
        background-color: blueviolet;
    }
    .login input {
        margin: 5px;
        border: 1px solid yellow;
    }
    h2 {
        margin-left: 5px;
        color: cyan;
    }
</style>
<body>
<form method="post">
    <div class="login" >
        <h2>Login</h2>
        <input type="text" name = "username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>
