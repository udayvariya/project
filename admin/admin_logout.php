<?php
session_start();
if (isset($_SESSION['email'])) {
<<<<<<< HEAD
  // echo "uday";  
=======
>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
    session_unset();
    session_destroy();
    header("Location: admin_login.php");  
  }
  
<<<<<<< HEAD
=======

>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
?>