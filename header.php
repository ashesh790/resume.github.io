<?php session_start(); ?>
<br>
<h1>Resume Maker</h1>
<button type="button" class="btn btn-danger">Home</button>
<button type="button" class="btn btn-primary">Feedback</button>
<button type="button" class="btn btn-primary">Contact Us</button>
<button type="button" class="btn btn-primary">Other tool</button>
<button type="button" class="btn btn-primary"><a href="login.php" style="color:white; "> Logout</a> </button> <br><br> 

<button class="btn btn-Success"><?PHP echo "Welcome".'&nbsp;'.'<b>'.$_SESSION['name'] .'</b>';?> </button>  
