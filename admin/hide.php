<?php
session_start();

if(isset($_SESSION['loggedin']) || (isset($_SESSION['username']) && $_SESSION['username'] == true)){
    header("location: student/dashbord.php");
}



?>