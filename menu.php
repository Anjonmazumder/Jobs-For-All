<?php
session_start();
if(isset($_SESSION['username'])){
    $username= $_SESSION['username'];
}
error_reporting(E_ALL ^ E_NOTICE);
require 'helpers.php';
require_once 'dbconnection.php';
?>
<a href="index.php"><img class="logo" src="img/logo.jpg" alt="logo" /></a><br />
<ul class="menu">
    <li class="item">
        <a href="#">Categories</a>
        <ul class="submenu">
            <?php
            $result = mysqli_query($con, "SELECT * FROM categories");
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <li class="subitem"><a href="joblist.php?category=<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></a></li>
            <?php } ?>
        </ul>
    </li>
    <li class="item">
        <?php if(get_user_type()=='employer'){ ?>
        <a href="joblist-company.php">Posted Jobs</a>
        <?php }
        else if(get_user_type()=='jobseeker'){?>
        <a href="resume.php">My Resume</a>
            <?php 
        }
        ?>
    </li>
    <li class="item">
        <?php 
        if(get_user_type()=="jobseeker"){ ?>
        
        <?php
        }
        else if(get_user_type()=="employer"){ ?>
        <a href="postjob.php">Post Job</a>
        <?php }
        else{ ?>
            <a href="register.php">Register</a>
        <?php }
        ?>
    </li>
    <li class="item">
        <?php 
        if(is_logged_in()){ ?>
        <a href="logout.php">Logout</a>
        <?php
        }
        else{ ?>
        <a href="login.php">Login</a>
        <?php }
        ?>
    </li>
    
</ul>
