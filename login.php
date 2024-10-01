<?php

include "hide.php";

$login = false;
$showError = false;
$logout = true; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
  
     
    $sql = "Select * from data where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        

        header("location: dashbord.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Webpage Design</title>
    <!-- <link rel="stylesheet" href="style\style.css"> -->
    <style> 

       *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    /* background-image: url("images/bgimg.jpg"); */
    background-color:  #e28e4a;
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ffffff;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
.logo1{
    font-size: 30px;
    padding: 20px;
    margin: 3px;
}

.menu{
    width: 400px;
    float: right;
    height: 70px;
    margin-right: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ca6b51;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #e63f3f;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
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
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
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
.liw{
    padding-top: 15px;
    /* padding-bottom: 10px; */
    text-align: center;
}
.liw2{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
    text-decoration: none;
    color: #ff7200;
    font-size: 20px;
    
}
.liw2 a{

    text-decoration: none;
    color: #ff7200;

    
}
.liw2 :hover{
    color: #ffffff;
}
i{
    font-size: 30;

}
     </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <!-- <i class="fa-solid fa-chevron-left"></i> -->
            <div class="icon">
                <h2 class="logo">PHP</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                    <li><a href="dashbord.php">DASHBORD</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <h1>PROJECT <br><span>MANAGEMENT</span> <br>SYSTEM</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</p>


            <form action="login.php" method="post">
                <div class="form">
                    <h2>Login Here</h2>
                    <input type="text" name="email" placeholder="Enter email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>
                    <p class="liw2"><a href="forget.php">Forget Password</a></p>

                    
                </div>
            </form>

        </div>
    </div>
        
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>