<?php
session_start();

if(isset($_SESSION['loggedin']) || (isset($_SESSION['']) && $_SESSION['username'] == true)){
    header("location: admin_dashbord.php");
}
    
?>