<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require 'dbconnection.php';
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
                <h2>LogIn</h2>
                <?php
                if (isset($_POST['submit'])) {
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];
                    if (!$_POST['uname'] || !$_POST['pass']) {
                        echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('you do not complete all the requirements')
                    </script>");
                    }
                    $sql = mysqli_query($con, "select * from users where username='$username'AND password='$password'");
                    if (mysqli_num_rows($sql) > 0) {
                        $_SESSION['username'] = $username;
                        header('Location: index.php');
                    } else {
                        echo "login unsuccessfull";
                    }
                }
                ?>
                <form action="#" method="POST">
                    <label>UserName:</label><input type="text" name="uname"><br><br>
                    <label>Password:</label><input type="password"name="pass"><br><br>
                    <input type="submit" value="login" name="submit">
                </form>
            </div>
        </div>
    </body>
</html>
