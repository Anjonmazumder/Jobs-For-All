<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
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
       <h2>You are now logged out.</h2>
       <a href="login.php">Login</a>
       </div>
            </div>
    </body>
</html>
