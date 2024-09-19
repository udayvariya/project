
<?php
$servername="localhost";
$uername="root";
$password="";
$database ="php_task";

$conn =  mysqli_connect($servername,$uername,$password,$database);
// if (!$conn){
//     echo "success";
// }
// else{
// die("Error". mysqli_connect_error());
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h2>Your Profile</h2>
    <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>S.No</th>
          <th>profile_image</th>
          <th>first name</th>
          <th>lastname</th>
          <th>email</th>
          <th>moblie no</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          session_start();

          $sql = "SELECT * FROM `data`";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$row['sno']."</td>
            <td>". $row['profile_image'] . "</td>
            <td>". $row['firstname'] . "</td>
            <td>". $row['lastname'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['mobileno'] . "</td>
             </tr>";
        } 
          ?>


      </tbody>
    </table>
    <p><a href="forget.php">Forget Password</a></p>
  </div>
  
</body>
</html>