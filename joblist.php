<?php
require 'dbconnection.php';
$cat_id = $_GET['category'];
$jobs = mysqli_query($con, "select * from jobs where job_category='$cat_id' order by job_id desc");
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
                    <p><strong>DeadLine: </strong><?php echo $jb['deadline']; ?></p>
                    <p><strong>Company: </strong><span><?php echo $jb['company']; ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
</body>
</html>
