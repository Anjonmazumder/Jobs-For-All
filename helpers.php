<?php
session_start();
function get_user_type() {
    require 'dbconnection.php';
    if(!isset($_SESSION['username'])){
        return '';
    }
    $username = $_SESSION['username'];
    $results = mysqli_query($con, "select * from users where username='$username'");
    $result = mysqli_fetch_array($results);
    return $result['type'];
}

function is_logged_in() {
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}

?>