<?php
$showAlert = false;
$showError = false;
$file_nameErr = $firstnameErr = $lastnameErr = $emailErr = $mobilenoErr = $passwordErr = $cpasswordErr = "";
$firstname = $lastname = $email = $mobileno = $password = $cpassword = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp,"uday/" . $file_name);
    
        if (empty($_POST["firstname"])) {
            $firstnameErr = " * Firstname is required";
          } else {
            $firstname = ($_POST["firstname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
                $firstnameErr = "Only letters and white space allowed";
              }
          }
        
          if (empty($_POST["lastname"])) {
            $lastnameErr = " * Lastname is required";
          } else {
            $lastname = ($_POST["lastname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
                $lastnameErr = "Only letters and white space allowed";
              }
          }

          if (empty($_POST["email"])) {
            $emailErr = " * email is required";
          } else {
            $email = ($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
          }
        
          if (empty($_POST["mobileno"])) {
            $mobilenoErr = " * mobileno is required";
          } else {
            $mobileno = ($_POST['mobileno']);
                if ($mobileno>10) {
                    $passwordErr = "Invalid mobileno format";
                }
          }

          if (empty($_POST["password"])) {
            $passwordErr = " * password is required";
          } else {
            $password = ($_POST["password"]);
                if ($password>8) {
                    $passwordErr = "Invalid password format";
                }
          }

          if (empty($_POST["cpassword"])) {
            $cpasswordErr = " * cpassword is required";
          } else {
            $cpassword = $_POST["cpassword"];
          }

          
        

        $exists=false;
        if(($password == $cpassword) && $exists==false){
            $sql = "INSERT INTO `data` (`sno`, `profile_image`, `firstname`, `lastname`, `email`, `mobileno`, `password`) VALUES ('', '$file_name', '$firstname', '$lastname', '$email', '$mobileno', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                // echo "sucessfull";
                $showAlert = true;
            }
            else{
                $showError = true;
            }
            // header("location: login.php");
    }
    else{
     echo "Passwords do not match";
    }
}
}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>SignUp</title>
    <link rel="stylesheet" href="style/signup.css">
    <style>
           
.form{
    width: 530px;
    height: 810px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: relative;
    margin-left: auto;
    margin-right: auto;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 95%;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 8px;
}

.form input{
    width: 330px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
    margin-right: 0px;
    padding-left: auto;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
    opacity: 0.5;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}

label{
    color :#fff;
    font-family: Arial, Helvetica, sans-serif;
    size: 35px;    
}

.par{
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    text-decoration: none;
    color: #ff7200;
    font-size: 20px;
    
}
.par a{

    text-decoration: none;
    color: #ff7200;

    
}
.par :hover{
    color: #ffffff;
}
.error{
    color: #f00202;
}

    </style>
</head>
<body>
<?php

// if($showError){
//     echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
//         <strong>Error!</strong> '. $showError.'
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">×</span>
//             </button>
//         </div> ';
//     }
//     if($showAlert){
//         echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
//             <strong>Success!</strong> Your account is now created and you can login
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//             <span aria-hidden="true">×</span>
//             </button>
//             </div> ';
//     }

include "alert.php";

?> 
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PHP</h2>
            </div>         
        </div> 
                 <div class="form">
                    <form action="signup.php" method="post" enctype="multipart/form-data">
                        <h2>Signup Here</h2>
                        <label>Select image:</label>
                        <input type="file" name="image" id=""><br>
                        <label>first name:</label>
                        <input type="text" name="firstname" placeholder="Enter firstname Here"><br><span class="error"><?php echo $firstnameErr;?></span><br>
                        <label>Last name:</label>
                        <input type="text" name="lastname" placeholder="Enter lastname Here"><br><span class="error"><?php echo $lastnameErr;?></span><br>
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="Enter email Here"><br><span class="error"><?php echo $emailErr;?></span><br>
                        <label>Mobile NO:</label>
                        <input type="text" name="mobileno" placeholder="Enter mobileno Here"><br><span class="error"><?php echo $mobilenoErr;?></span><br>
                        <label>Password:</label>
                        <input type="password" name="password" placeholder="Enter Password Here"><br><span class="error"><?php echo $passwordErr;?></span><br>
                        <label>CPassword:</label>
                        <input type="password" name="cpassword" placeholder="Enter Confirm Password Here"><br><span class="error"><?php echo $cpasswordErr;?></span><br>
                        <button class="btnn">Signup</button>
                        <p class="par">if you are already <a href="login.php">login</a></p>
                    </form>
               </div>
    </div>
</body>
</html>
