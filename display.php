<?php 
  // include 'header.php'; 
    session_start(); 
  if (isset( $_POST['submit'] )) { 
    $name=$_POST['name']; 
    $address=$_POST['address'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $employer=$_POST['employer'];
    $Job=$_POST['Job'];
    $skill=$_POST['skill'];
    $ecity=$_POST['ecity'];
    $estate=$_POST['estate'];
    $experience=$_POST['experience'];
    $hobby=$_POST['hobby'];
    $school=$_POST['school'];
    $scity=$_POST['scity'];
    $state=$_POST['sstate'];
    $degree=$_POST['degree'];
    $summary=$_POST['summary']; 
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
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
            width:700px; 
            margin-left: 22%; 
            margin-top: 14px; 
            background-color:; 
          } 
          label,input {
            display: block;
            width: 150px; 
          }

          label {
            text-align: left;
            width: 200px;  
          }
          #ol{
            background-color:#1a75ff;  
            color: white; 
          } 
    </style>
    <title>Resume Maker</title>
  </head>
  <body> 
    <br>
          <h1>Resume Maker</h1>
          <button type="button" class="btn btn-primary"><a href="resume.php" style="color: white;">Home</a></button>
          <button type="button" class="btn btn-primary">Feedback</button>
          <button type="button" class="btn btn-primary">Contact Us</button>
          <button type="button" class="btn btn-primary">Other tool</button>
          <button type="button" class="btn btn-primary"><a href="logout.php" style="color:white;">Logout</a></button> 
          <button class="btn btn-success"><?PHP echo "Welcome".'&nbsp;'.'<b>'.$_SESSION['name'] .'</b>';?> </button>
    <form> 
       <div class="form_id"> 
        <hr>
           <div class="form-group">
            <h4>Basic Detail</h4>
             <label>Enter yout full name</label>
             <label class="form-control" id="ol"><?php echo "$name"; ?></label>
           </div>

          <div class="form-group">
            <label>Address</label>
            <label class="form-control" id="ol"  rows="4" cols="50"><?php echo "$address"; ?></label>
          </div> 
          <br> 
          <div class="form-group">
            <div style="display: flex;"> 
            <label>City&nbsp;:&nbsp;</label>  
            <label class="form-control" id="ol" style="width:190px;" rows="4" cols="50"><?php echo "$city"; ?></label>
            &nbsp;
            <label>Zip Code&nbsp;:&nbsp;</label>
            <label class="form-control" id="ol" style="width:190px;" rows="4" cols="50"><?php echo "$zip"; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <label class="form-control" id="ol"><?php echo "$email"; ?></label>
          </div>

          <div class="form-group">
            <label>Phone</label>
            <label class="form-control" id="ol"><?php echo "$phone"; ?></label>
          </div> 
          <hr> 
            <h4> Work Area & Experience</h4>
          <div class="form-group">
            <label>Employer</label>
            <label class="form-control" id="ol"><?php echo "$employer"; ?></label>
          </div> 

          <div class="form-group">
            <label>Job Title</label>
            <label class="form-control" id="ol"><?php echo "$Job"; ?></label>
          </div>

          <div class="form-group">
            <label>Skill Detail</label>
            <label class="form-control" id="ol"><?php echo "$skill"; ?></label>
          </div> 

          <div class="form-group">
            <label>City</label>
            <label class="form-control" id="ol"><?php echo "$ecity"; ?></label>
          </div>

          <div class="form-group">
            <label>State</label>
            <label class="form-control" id="ol"><?php echo "$estate"; ?></label>
          </div>

          <div class="form-group">
            <label>Experience In Year</label>
            <label class="form-control" id="ol"><?php echo "$experience"; ?></label>
          </div> 
          <br>
          <div class="form-group" id="ol">
            <label>Area Of Enterst</label>
            <label class="form-control" id="ol"><?php echo "$hobby"; ?></label>
          </div>
          <hr>
          <h4>Eduction Details</h4> 

          <div class="form-group">
            <label>School Name</label>
            <label class="form-control" id="ol"><?php echo "$school"; ?></label>
          </div>

          <div class="form-group">
            <label>City</label>
            <label class="form-control" id="ol"><?php echo "$scity"; ?></label>
          </div>

          <div class="form-group">
            <label>state</label>
            <label class="form-control" id="ol"><?php echo "$state"; ?></label>
          </div>

          <div class="form-group">
            <label>Degrees</label>
            <label class="form-control" id="ol"><?php echo "$degree"; ?></label>
          </div>  

          <div class="form-group">
            <label>Short Summary</label> 
            <label class="form-control" id="ol" rows="4" cols="50"><?php echo "$summary"; ?></label>
          </div>

          <br>
          <button class="btn btn-primary" name="reset"><a href="resume.php" style="color: white;"> Back </a></button> 
          <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
       </div> 
    </form> 
           
  </body>
</html> 
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>