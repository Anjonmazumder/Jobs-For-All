<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$com_username = $_SESSION['username'];
require 'dbconnection.php';
$after_post = false;
if (isset($_POST['post_name'])) {
    $postname = $_POST['post_name'];
    $vacan = $_POST['no_of_vacancies'];
    $jobcategory = $_POST['job_category'];
    $jobtype = $_POST['job_type'];
    $education = $_POST['ed_req'];
    $experience = $_POST['exp_req'];
    $gen = $_POST['gender'];
    $loc = $_POST['location'];
    $salary = $_POST['salary'];
    $pub = date('Y-m-d H:i:s');
    $dead = $_POST['deadline'];
    $apply_ins = $_POST['apply_ins'];
    if (mysqli_query($con, "insert into jobs(post_name,no_of_vacancies,job_category,job_type,ed_req,exp_req,gender,location,salary,published,deadline,apply_instruction,company)values('$postname','$vacan','$jobcategory','$jobtype','$education','$experience','$gen','$loc','$salary','$pub','$dead','$apply_ins','$com_username')")) {
        $after_post = true;
    }
}
$categories = mysqli_query($con, "SELECT * FROM categories");
$locations = mysqli_query($con, "SELECT * FROM districts");
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
            
            <div id="form_div">
                <?php
                if ($after_post) {
                    ?> <p><?php echo 'Job Saved.'; ?></p>
                <?php }
                ?>
                <h2>Post a Job</h2>
                <form class="forms" action="#" method="post">
                    <div class="field">
                        <label>Post Name</label>
                        <input class="inp" type="text" name="post_name" id="post_name"/>
                    </div>
                    <div class="field">
                        <label >No. of Vacancies</label>
                        <input class="inp" type="text" name="no_of_vacancies" id="no_of_vacancies"/>
                    </div>
                    <div class="field">
                        <label>Job Category</label>
                        <select class="inp" name="job_category" id="job_category">
                            <?php
                            while ($cat = mysqli_fetch_array($categories)) {
                                ?>
                                <option value="<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="field">
                        <label >Job Type</label>
                        <select class="inp" name="job_type" id="job_type">
                            <option value="full">Full Time</option>
                            <option value="part">Part Time</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                    <div class="field">
                        <label >Gender</label>
                        <input type="radio" name="gender" id="gender" value="Male"/><label >Male</label>
                        <input type="radio" name="gender" id="gender" value="Female"/><label >Female</label>
                        <input type="radio" name="gender" id="gender" value="Both"><lable>Both</lable>
                    </div>
                    <div class="field">
                        <label >Location</label>
                        <select class="inp" name="location" id="location">
                            <?php
                            while ($location = mysqli_fetch_array($locations)) {
                                ?>
                                <option value="<?php echo $location['dist_id'] ?>"><?php echo $location['dist_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="field">
                        <label >Salary</label>
                        <input class="inp" type="text" name="salary" id="salary"/>
                    </div>
                    <div class="field">
                        <label >Deadline</label>
                        <input class="inp" class="inp" type="text" name="deadline" id="deadline" placeholder="YYYY-MM-DD"/>
                    </div>
                    <div class="field">
                        <label >Educational Requirements</label>
                        <textarea class="inp" rows="4" cols="50" name="ed_req" id="ed_req"></textarea>
                    </div>
                    <div class="field">
                        <label >Experience Requirements</label>
                        <textarea class="inp" rows="4" cols="50" name="exp_req" id="exp_req"></textarea>
                    </div>
                    <div class="field">
                        <label >Apply Instruction</label>
                        <textarea class="inp" rows="4" cols="50" name="apply_ins" id="apply_ins"></textarea>
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" value="Post"/>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </body>
</html>
