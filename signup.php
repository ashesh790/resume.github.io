<?php 
    session_start(); 
    $con=mysqli_connect("localhost", "root", "", "signup"); 
    if (isset($_POST['submit']))
    { 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $phpne = $_POST['phone'];

        $sql="INSERT INTO `sin_up` ( `name`, `email`, `psw`, `phone`) VALUES ( '$name ', '$email ', '$psw', '$phpne');"; 
         $query_run = mysqli_query($con,$sql); 
          header("location:resume.php");
    } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <style type="text/css">
      body{
            
            background-color: lightblue;
            align:center;
            text-align:center;
          }
          .form_id{
            width:500px; 
            margin-left: 30%; 
            margin-top: 14px; 
          }
          label,input {
            display: block;
            width: 150px; 
          }

          label {
            text-align: left;
            width: 200px;
          }

    </style>
    <title>Sign up</title>
  </head>
  <body> 
          <br>
              <h1>Signup</h1>
              <button type="button" class="btn btn-primary">Home</button> 
              <button type="button" class="btn btn-primary">Feedback</button>
              <button type="button" class="btn btn-primary">Contact Us</button>
              <button type="button" class="btn btn-primary">Other tool</button> 
          
<div class="form_id">
  <hr> 
    <form method="post"> 
          <div class="form-group">
            <label>User name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
  
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required> 

            <label>Password</label>
            <input type="password" name="psw" class="form-control" placeholder="Password" required>

            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="00000 00000" required>
            <a href="login.php">New User ?</a>
          </div> 
          <br>  
          <button type="reset" name="reset" class="btn btn-primary">Reset</button> 
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Register</button>
    </form>
</div> 




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>