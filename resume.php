<?php 
// include header file with session 
  include 'header.php';   
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
            backdrop-filter: blur(5px);
            background-color: lightblue;
            align:center;
            text-align:center;
          }
          .form_id{
            width:700px; 
            margin-left: 22%; 
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
    <title>Resume Maker</title> 
  </head>
  <body> 
    <!---------------- Form Made For Resume -----------> 
    <form method="POST" action="display.php">
       <div class="form_id">    
        <hr>
           <div class="form-group">   
            <h4>Basic Detail</h4>
             <label>Enter yout full name</label>
             <input type="text" name="name" class="form-control" placeholder="Enter Fullname" required><hr>
           </div>

          <div class="form-group">
            <label>Address</label>
            <input class="form-control" name="address" placeholder="Address" required><hr>
          </div> 
          <br> 
          <div class="form-group">
            <div style="display: flex;"> 
            <label>City&nbsp;:&nbsp;</label> 
            <input type="text" style="width:190px;" name="city" class="form-control" placeholder="City" required> 
            &nbsp;
            <label>Zip Code&nbsp;:&nbsp;</label>
            <input type="text" style="width:190px;" name="zip" class="form-control" placeholder="ZipCode" required>
            </div>
          </div><hr> 
          <div class="form-group">
            <label>Email Address</label>
            <input type="text" name="email" class="form-control" placeholder="Email" required><hr>
          </div>

          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="00000 00000" required><hr>
          </div> 
           
            <h4> Work Area & Experience</h4>
          <div class="form-group">
            <label>Employer</label>
            <input type="text" name="employer" class="form-control" placeholder="Employer" required><hr>
          </div> 

          <div class="form-group">
            <label>Job Title</label>
            <input type="text" name="Job" class="form-control" placeholder="Backend, Frontend" required><hr>
          </div>

          <div class="form-group">
            <label>Skill Detail</label>
            <input type="text" name="skill" class="form-control" placeholder="Html, css" required><hr>
          </div> 

          <div class="form-group">
            <label>City</label>
            <input type="text" name="ecity" class="form-control" placeholder="London" required><hr>
          </div>

          <div class="form-group">
            <label>State</label>
            <input type="text" name="estate" class="form-control" placeholder="Gujarat" required><hr>
          </div>

          <div class="form-group">
            <label>Experience In Year</label>
            <input type="text" name="experience" class="form-control" placeholder="2 Year" required><hr>
          </div>
          <br>
          <div class="form-group">
            <label>Area Of Enterst</label>
            <select class="form-control" name="hobby">
              <option class="form-control" value="Web_Devlopment">Web Devlopment</option> 
              <option class="form-control" value="Softwere_Engineering">Softwere Engineering</option> 
              <option class="form-control" value="Airtificial_entellijence">Airtificial Entellijence</option> 
              <option class="form-control" value="Machine_Learning">Machine Learning</option> 
              <option class="form-control" value="Graphics_Design">Graphics Designer</option>
            </select>
          </div>
          <hr>
          <h4>Eduction Details</h4> 

          <div class="form-group">
            <label>School Name</label>
            <input type="text" name="school" class="form-control" placeholder="abc school" required> <hr>
          </div>

          <div class="form-group">
            <label>City</label>
            <input type="text" name="scity" class="form-control" placeholder="City" required><hr>
          </div>

          <div class="form-group">
            <label>state</label>
            <input type="text" name="sstate" class="form-control" placeholder="Keral" required><hr>
          </div>

          <div class="form-group">
            <label>Degrees</label>
            <input type="text" name="degree" class="form-control" placeholder="MBA, BE, ME, Ph.D" required><hr>
          </div>  

          <div class="form-group">
            <label>Short Summary</label>
            <textarea class="form-control" rows="4" cols="50" name="summary" placeholder="Write Short summary........." required></textarea><hr>
          </div>

          <br>
          <button type="reset" class="btn btn-primary" name="reset">Reset</button> 
          <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
       </div> 
    </form> 
           
  </body>
</html> 
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> 