<?php
session_start();

if(isset($_SESSION['loggedin']) || (isset($_SESSION['']) && $_SESSION['username'] == true)){
    header("location: admin_dashbord.php");
}
<<<<<<< HEAD
    
=======

>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
?>