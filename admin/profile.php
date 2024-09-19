<?php
include "_dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        i{
            height: 100px;
            width: 100px;
            align-items: center;
            justify-content: center;
            padding : 50px 50px;
            text-decoration: none;
            color: black;
        
        }
        h2{
            margin-left: 500px;
        }
    </style>
</head>
<body>
<body>
    <a href="admin_home.php">
        <i class="fa-solid fa-chevron-left"></i>
    </a>
    <h2> Student Details</h2>
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
          <th>Action</th>
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
    
</body>
</html>