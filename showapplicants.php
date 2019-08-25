<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require 'dbconnection.php';
$job_id = $_GET['job_id'];
$applys = mysqli_query($con, "select * from apply where job_id='$job_id'");
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
                <h2>Applicants List</h2>
                <?php
                while ($apply = mysqli_fetch_array($applys)) {
                    $candidate_username = $apply['candidate_username'];
                    $resume = mysqli_query($con, "select * from resume where username='$candidate_username'");
                    $re = mysqli_fetch_array($resume);
                    ?>
                    <a href="resumeview.php?username=<?php echo $apply['candidate_username'] ?>" class="job">
                        <p class="post_name"><strong><?php echo $re['name']; ?></strong></p>
                    </a>
                    <?php
                }
                ?>
            </div></div>
    </body>
</html>
