<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp,"uday/" . $file_name);

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"]; 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    

    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `data` (`sno`, `profile_image`, `firstname`, `lastname`, `email`, `mobileno`, `password`) VALUES ('', '$file_name', '$firstname', '$lastname', '$email', '$mobileno', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "sucessfull";
        }
        header("location: login.php");
        
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
    <title>SignUp</title>
    <link rel="stylesheet" href="style/signup.css">
<style>
    
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

</style>
</head>
<body>

<?php
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
                        <input type="text" name="firstname" placeholder="Enter firstname Here"><br>
                        <label>Last name:</label>
                        <input type="text" name="lastname" placeholder="Enter lastname Here"><br>
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="Enter email Here"><br>
                        <label>Mobile NO:</label>
                        <input type="text" name="mobileno" placeholder="Enter mobileno Here"><br>
                        <label>Password:</label>
                        <input type="password" name="password" placeholder="Enter Password Here"><br>
                        <label>CPassword:</label>
                        <input type="password" name="cpassword" placeholder="Enter Confirm Password Here"><br>
                        <button class="btnn">Signup</button>
                        <p class="par">if you are already <a href="login.php">login</a></p>
                    </form>
               </div>
</div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
