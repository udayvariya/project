<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME</title>
<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    /* background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(code\ of\ war.jpg); */
    /* background-image: url("images/bgimg.jpg"); */
    background-color:  #e28e4a;
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1210px;
    height: 75px;
    margin: auto;
}


.logo{
    color: rgb(245, 245, 245);
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: right;
    height: 70px;
    margin-right: 50px;
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
    background: #fff;
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
    color: #fff;
    font-size: 65px
}

</style>
</style>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h3 class="logo">PHP</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="signup.php">STUDENT SIGNUP</a></li>
                    <li><a href="login.php">STUDENT LOGIN</a></li>
                    <li><a href="admin/admin_login.php">ADMIN LOGIN</a></li>
                </ul>
            </div>

           
        </div> 
        <div class="content">
            <h1>PROJECT <br><span>MANAGEMENT</span> <br>SYSTEM</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</p>

                    </div>
                </div>
        </div>
    </div>
</body>
</html>