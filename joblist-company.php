<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$com_username = $_SESSION['username'];
require 'dbconnection.php';
$jobs = mysqli_query($con, "select * from jobs where company='$com_username' order by job_id desc");
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
            <h2>Jobs</h2>
            <?php while ($jb = mysqli_fetch_array($jobs)) { ?>
                <a href="showjob.php?id=<?php echo $jb['job_id'] ?>" class="job">
                    <p class="post_name"><strong><?php echo $jb['post_name']; ?></strong></p>
                    <p><label>DeadLine: </label><?php echo $jb['deadline']; ?></p>
                </a>
            <?php } ?>
            </div>
        </div>
    </body>
</html>
