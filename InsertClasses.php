<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
		

.background    {
	background: url("RecCentre.jpeg") no-repeat center fixed;
	background-size: cover;
	background-color: lightblue;
}


input[type=submit] {
	color: White;
	padding:5px 15px; 
	background:DodgerBlue; 
	border-style: solid;
	border-width: 1px;
	border-color: black;
}




.flex-container {
	  display:flex;
	  clear:both;
	  background-color: DodgerBlue;

}

.container{
	margin-bottom:0;
	margin-top:0;
	background-color:#242423;
	height:20%;
	width: 100%;
}

.rcorners {
    margin: auto;
    width: 50%;
    border-radius: 25px;
    background: #242423;
    padding: 20px; 
    width: 300px;
    height: 800x;    
}

p{
color:white;
}







</style>

</head>

<body class="background">

<div class="container">
<h1 style="color:white">Username: <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></h1>
<p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</div>

<div class="jumbotron text-center"style="margin-bottom:0"style="margin-top:0">
  <h1>Recreation Centre</h1>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="InstructorInterface.php">Home</a></li>
        <li class="active"><a href="InsertClasses.php">Insert Classes</a></li>
	<li><a href="SearchClassesInstructor.php">Search Classes</a></li>
        <li><a href="UpdateClasses.php">Update Classes</a></li>
	<li><a href="DeleteClasses.php">Delete Classes</a></li>
      </ul>
    </div>
  </div>
</nav>


</div>

<br>

<div class="rcorners">

<form action="InsertClasses-Process.php" method="post">


<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select * from Teaches");
 ?>
<p> Input Class Info </p>

<p> Day </p>
 <input name="Day1" type="text"
placeholder="Enter Day">
<p> Time </p>
 <input name="Times1" type="text"
placeholder="Enter Time">
<p> Cnum </p>
 <input name="Cnum1" type="text"
placeholder="Enter Cnum">
<p> IID </p>
 <input name="IID1" type="text"
placeholder="Enter IID">
 <br>
 <br>
 <input type="submit" value="Submit">
 </form>
</div>
</body>
</html>
