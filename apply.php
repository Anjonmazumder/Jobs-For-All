<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require 'dbconnection.php';
$job_id = $_GET['jobid'];
$username = $_SESSION['username'];
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
                <?php
                $apply_date = date('Y-m-d H:i:s');
                if (mysqli_query($con, "insert into apply(candidate_username, job_id, apply_date) values('$username','$job_id','$apply_date')")) {
                    echo "<h2>Application Sent.</h2>";
                } else {
                    echo "hh";
                }
                ?>
            </div></div>
    </body>
</html>
