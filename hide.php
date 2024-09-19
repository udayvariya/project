<?php
session_start();

if(isset($_SESSION['loggedin']) || (isset($_SESSION['username']) && $_SESSION['username'] == true)){
    header("location: dashbord.php");
}



?>