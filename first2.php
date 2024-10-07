<<<<<<< HEAD
<?php
$servername="localhost";
$uername="root";
$password="";
$database ="uday";

$conn =  mysqli_connect($servername,$uername,$password,$database);
if (!$conn){
//     echo "success";
// }
// else{
die("Error". mysqli_connect_error());
}

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    if(move_uploaded_file($file_tmp,"uday/" . $file_name)){
        echo "sucess";
    }
    else{
        echo "not sucess";
    }

    $sql = "INSERT INTO image (image) VALUES ('$file_name')";
    $result=mysqli_query($conn, $sql);
    if($result){
    echo "sucess";
}
else{
    echo "not added";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="first2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id=""><br>
        <input type="submit">
    </form>
</body>
=======
<<<<<<< HEAD
<?php
$servername="localhost";
$uername="root";
$password="";
$database ="uday";

$conn =  mysqli_connect($servername,$uername,$password,$database);
if (!$conn){
//     echo "success";
// }
// else{
die("Error". mysqli_connect_error());
}

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    if(move_uploaded_file($file_tmp,"uday/" . $file_name)){
        echo "sucess";
    }
    else{
        echo "not sucess";
    }

    $sql = "INSERT INTO image (image) VALUES ('$file_name')";
    $result=mysqli_query($conn, $sql);
    if($result){
    echo "sucess";
}
else{
    echo "not added";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="first2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id=""><br>
        <input type="submit">
    </form>
</body>
=======
<?php
$servername="localhost";
$uername="root";
$password="";
$database ="uday";

$conn =  mysqli_connect($servername,$uername,$password,$database);
if (!$conn){
//     echo "success";
// }
// else{
die("Error". mysqli_connect_error());
}

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    if(move_uploaded_file($file_tmp,"uday/" . $file_name)){
        echo "sucess";
    }
    else{
        echo "not sucess";
    }

    $sql = "INSERT INTO image (image) VALUES ('$file_name')";
    $result=mysqli_query($conn, $sql);
    if($result){
    echo "sucess";
}
else{
    echo "not added";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="first2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id=""><br>
        <input type="submit">
    </form>
</body>
>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
>>>>>>> 8db2b2fbae15c7e86b87ce304bbb2c66c5c23700
</html>