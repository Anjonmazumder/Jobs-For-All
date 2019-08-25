<?php
require 'dbconnection.php';
$job_id = $_GET['id'];
$job = mysqli_query($con, "select * from jobs where job_id='$job_id'");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Job Details</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <div class="wrap">
            <?php require 'menu.php'; ?>
            <div class="main">
                <h2>Jobs Details</h2>
                <?php
                $jb = mysqli_fetch_array($job);
                $location_id = $jb['location'];
                $location = mysqli_query($con, "select * from districts where dist_id='$location_id'");
                $loc = mysqli_fetch_array($location);
                $location_name = $loc['dist_name'];
                ?>
                <div class="field"><label>Post Name: </label><span><?php echo $jb['post_name']; ?></span></div>
                <div class="field"><label>No.of vacancies: </label><span><?php echo $jb['no_of_vacancies']; ?></span></div>
                <div class="field"><label>Job Category: </label><span><?php echo $jb['job_category']; ?></span></div>
                <div class="field"><label>Job Type: </label><span><?php echo $jb['job_type']; ?></span></div>
                <div class="field"><label>Educational Requirements: </label><span><?php echo $jb['ed_req']; ?></span></div>
                <div class="field"><label>Gender: </label><span><?php echo $jb['gender']; ?></span></div>
                <div class="field"><label>Location: </label><span><?php echo $location_name ?></span></div>
                <div class="field"><label>Salary: </label><span><?php echo $jb['salary']; ?></span></div>
                <div class="field"><label>Publish Date: </label><span><?php echo $jb['published']; ?></span></div>
                <div class="field"><label>DeadLine: </label><span><?php echo $jb['deadline']; ?></span></div>
                <div class="field"><label>Company: </label><span><?php echo $jb['company']; ?></span></div>
                <div class="field"><label>Apply Instruction: </label><span><?php echo $jb['apply_instruction']; ?></span></div>
                <?php if (get_user_type() == "jobseeker") { ?>
                    <div class="field"><a href="apply.php?jobid=<?php echo $jb['job_id'] ?>">Apply Online</a></div>
                    <?php
                } else if(get_user_type() == "employer"){
                    ?>
                    <div class="field"><a href="showapplicants.php?job_id=<?php echo $jb['job_id'] ?>">Show Applicants</a></div>
                <?php }
                ?>
            </div>
        </div>
    </body>
</html>
