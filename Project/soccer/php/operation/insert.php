<html>
  <head>
      <title>Soccer Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="../../images/icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link type="text/css" rel="stylesheet" href="../../css/navbar.css">
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="../../css/main.css" rel="stylesheet" />
	
	
	
	<nav id="navbar" class="navigation-bar">
  <div class="nav-wrapper">
      <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="#home"><i class="fas fa-chess-knight"></i>Soccer DBMS </a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="../../index.html">Search</a></li><!--
	--><li><a href="../matches.php">Matches</a></li><!--
	--><li><a href="../operations.php">Operations</a></li><!--
	   --><li><a href="../logs.php">Logs</a></li><!--
	      --><li><a href="../database.php">Database</a></li><!--
   --><li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>


<style>
table, th, td {
    border: 1px solid black;
}
h3 {
	margin:10px;
}
input {
	padding:3px;
	border-radius: 6px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button1:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

	</head>

  <body>
  
  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "football_league";


/* $ifname="";
$ilname = "";
$ipostion = "";
$iweight = "";
$iheight = "";
$inationality = "";
$inumber ="";
$iteam = ""; */

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$inputchoice = $_POST["choices-single-defaul"];


?>



<?php
if($inputchoice=="Player"){
	
 ?>
 
 
	
	
	<div class="s003"  >
	<form method="post" action="insert/pinsert.php" style="display:block;" >  
	<h2>Player Details Insertion</h2>
	<p></p>
		<div>
		<h3>Player ID : <input id="playerid" type="number" name="playerid" style="margin-left:23px;"></h3>
		</div><div>
		<div>
		<h3>First Name : <input id="fname" type="text" name="fname" style="margin-left:3px;"></h3>
		</div><div>

		<h3>Last Name : <input id="lname" type="text" name="lname" style="margin-left:4px;" >
			</h3>
				</div><div>
		<h3>Position : <input id="postion" type="text" name="position" style="margin-left:30px;">
			</h3>
				</div><div>

		<h3>Weight : <input id="weight" type="number" name="weight" style="margin-left:36px;">
			</h3>
				</div><div>
		<h3>Height : <input id="height" type="number" name="height" style="margin-left:42px;">
			</h3>
				</div><div>
		<h3>Nationality :   <input id="nationality" type="text" name="nationality" style="margin-left:3px;">
			</span></h3>
			</div><div>
				
		<h3>Kit Number : <input id="number" type="number" name="number">
			</span></h3>
				</div><div>
		<h3>Team : <input type="text" name="team" style="margin-left:49px;">
			</span></h3>
				</div>
				
		<input type="submit" name="submit" value="Submit" onClick="insert/pinsert.php" class="button button1">  
</form>
</div>
	
<?php 

}

if($inputchoice=="Goal"){
	
 ?>
	
	
	<div class="s003" >
	<form method="post" action="insert/ginsert.php" style="display:block;" > 
<h2>Goals Details Insertion</h2>	
		<div>
		

		<h3>Time : <input id="time" type="text" name="time"  style="margin-left:35px;" >
			<span class="error" style="font-size: medium;">--MIN--SEC </span></h3>
				</div><div>
		<h3>Player ID : <input id="playerid" type="text" name="playerid" >
			<span class="error">* </span></h3>
				</div><div>

		<input type="submit" name="submit" value="Submit" onClick="insert/ginsert.php" class="button button1">  
</form>
</div>
	
<?php 

}

if($inputchoice=="Stats"){
	
 ?>
	
	
	<div class="s003" >
	<form method="post" action="insert/sinsert.php" style="display:block;" >  
	<h2>Stats Insertion</h2>
		<div>
		

		
		<h3>Player ID : <input id="playerid" type="text" name="playerid" style="margin-left:41px;">
			<span class="error">* </span></h3>
				</div><div>
		<h3>Red Cards : <input id="red" type="text" name="red"  style="margin-left:24px;">
			<span class="error" >* </span></h3>
				</div><div>
		<h3>Yellow Cards : <input id="yellow" type="text" name="yellow"  >
			<span class="error" >* </span></h3>
				</div><div>
		<h3>Goals : <input id="goals" type="text" name="goals"  style="margin-left:67px;">
			<span class="error" >* </span></h3>
				</div><div>
		<h3>Assists : <input id="assists" type="text" name="assists" style="margin-left:57px;" >
			<span class="error" >* </span></h3>
				</div><div>
		<h3>Cleansheets : <input id="clean" type="text" name="clean"  style="margin-left:2px;">
			<span class="error" >* </span></h3>
				</div>

		<input type="submit" name="submit" value="Submit" onClick="insert/sinsert.php" class="button button1">  
</form>
</div>
	
<?php 

}

if($inputchoice=="Coach"){
	
 ?>
	
	
	<div class="s003" >
	<form method="post" action="insert/cinsert.php" style="display:block;" > 
<h2>Coach Details Insertion</h2>	
		<div>
		

		<h3>First Name : <input id="fname" type="text" name="fname">
		</h3>
		</div><div>

		<h3>Last Name : <input id="lname" type="text" name="lname"  >
			</h3>
				</div><div>
		<h3>Phone No. : <input id="phone" type="number" name="phone" style="margin-left:7px;">
			</h3>
				</div><div>
		<h3>Type : <input id="type" type="text" name="type" style="margin-left:53px;">
			</h3>
				</div><div>
		<h3>Team : <input id="team" type="text" name="team" style="margin-left:44px;">
			</h3>
				</div>
		

		<input type="submit" name="submit" value="Submit" onClick="insert/cinsert.php" class="button button1">  
</form>
</div>
	
<?php
}

if($inputchoice=="Table"){
 ?>
 <div class="s003" >
	
<h2>Please select a table.</h2>	
		
		</div>
<?php
}
?>
   
   </body>
</html>