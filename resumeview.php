<?php
require 'dbconnection.php';
$username = $_GET['username'];
$can = mysqli_query($con, "select * from resume where username='$username'");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>resume details</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <div class='wrap'>
            <?php require 'menu.php'; ?>
            <div class="main">
            <h2>Resume</h2>
            <?php while ($candi = mysqli_fetch_array($can)) { ?>
                <div><label>Name: </label><span><?php echo $candi['name']; ?></span></div>
                <div><label>Father's Name: </label><span><?php echo $candi['fa_name']; ?></span></div>
                <div><label>Mother's Name: </label><span><?php echo $candi['moname']; ?></span></div>
                <div><label>Nationality: </label><span><?php echo $candi['nationality']; ?></span></div>
                <div><label>Gender: </label><span><?php echo $candi['gender']; ?></span></div>
                <div><label>Marital Status: </label><span><?php echo $candi['gender']; ?></span></div>
                <div><label>Age: </label><span><?php echo $candi['age']; ?></span></div>
                <div><label>Address: </label><span><?php echo $candi['address']; ?></span></div>
                <div><label>Educational Qualification: </label><span><?php echo $candi['edu_qua']; ?></span></div>
                <div><label>Experience: </label><span><?php echo $candi['exp']; ?></span></div>
                <div><label>Contact: </label><span><?php echo $candi['others']; ?></span></div>

            <?php } ?>
        </div>
    </div>

</body>
</html>
