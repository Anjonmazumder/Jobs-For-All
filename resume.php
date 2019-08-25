<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$username = $_SESSION['username'];
require 'dbconnection.php';
$after_post = false;
if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $moname = $_POST['moname'];
    $nation = $_POST['nationality'];
    $gen = $_POST['gender'];
    $mary_status = $_POST['mary_satus'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $edu_qua = $_POST['edu_qua'];
    $exp = $_POST['exp'];
    $others = $_POST['others'];
    if (mysqli_query($con, "insert into resume(username,name,fa_name,moname,nationality,gender,mary_status,age,address,edu_qua,exp,others) values('$username','$name','$fname','$moname','$nation','$gen','$mary_status','$age','$address','$edu_qua','$exp','$others')")) {
        $after_post = true;
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
            <h2>Post a Resume</h2>
            <form class="forms" action="#" method="post">
                <div class="field">
                    <label>Name:</label>
                    <input type="text" name="name" id="name"/>
                </div> 
                <div class="field">
                    <label>Father's Name:</label>
                    <input type="text" name="fname" id="father name"/>
                </div>
                <div class="field">
                    <label>Mother's Name:</label>
                    <input type="text" name="moname"id="mother name"/>
                </div>
                <div class="field">
                    <label>Nationality:</label>
                    <input type="text" name="nationality"id="nationality"/>
                </div>
                <div class="field">
                    <label>Gender:</label>
                    <input type="radio" name="gender"  id="gender" value="Male"/>Male
                    <input type="radio" name="gender" id="gender" value="Female"/>Female
                </div>
                <div class="field">
                    <label>Maritial Status:</label>
                    <input type="radio" name="mary_satus"id="marry1 " value="married"/>Married
                    <input type="radio"name="mary_satus" id="marry2" value="unmarried">Unmarried
                </div>
                <div class="field">
                    <label>Age:</label>
                    <input type="text" name="age" id="age"/>
                </div>
                <div class="field">
                    <label> Address:</label>
                    <textarea rows="4" cols="50" name="address" id="present address" ></textarea>
                </div>
                <div class="field">
                    <label>Educational Qualification:</label>
                    <textarea rows="4" cols="50" name="edu_qua" id="ed_qua"></textarea>
                </div>

                <div class="field">
                    <label>Experience:</label>
                    <textarea rows="4" cols="50" name="exp" id="exp_qua"></textarea>
                </div>
                <div class="field">
                    <label>Contact:</label>
                    <textarea rows="4" cols="50" name="others" id="additional_qua"></textarea>
                </div><br><br>
                <input type="submit" name="submit" id="submit" value="Save"/>
            </form>
            <?php
            if ($after_post) {
                ?> <p><?php echo 'Saved successfully.'; ?></p>
            <?php }
            ?>
                </div>
        </div>
    </body>
</html>
