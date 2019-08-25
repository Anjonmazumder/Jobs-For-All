<?php
require 'dbconnection.php';
if (isset($_POST['username'])) {
    $usname = $_POST['username'];
    $passwo = $_POST['password'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    if(mysqli_query($con, "insert into users(username, password, type, name) values('$usname','$passwo','$type','$name')")){
        echo "Successfully Registered";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <div class="wrap">
            <?php require 'menu.php'; ?>
            <div class="main">
        <h2><center>Register</center></h2>
        <form action="#" method="POST">
            <label>UserName:</label><input type="text" name="username"id="username"><br><br>
            <label>Password:</label><input type="password" name="password" id="password"><br><br>
            <label>Name / Company Name:</label><input type="text" name="name" id="name"><br><br>
            <label>Type:</label><input type="radio" name="type" value="jobseeker"/><lable>Job Seeker</lable>
                    <input type="radio" name="type" value="employer"/><lable>Employer</lable>
            <br /><br /><input type="submit" name="submit" value="register">
        </form>
        </div></div>
    </body>
</html>
