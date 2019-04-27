<html>
  <head>
      <title>Soccer Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="../../../images/icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link type="text/css" rel="stylesheet" href="../../../css/navbar.css">
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="../../../css/main.css" rel="stylesheet" />
	
	
	
	<nav id="navbar" class="navigation-bar">
  <div class="nav-wrapper">
      <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="#home"><i class="fas fa-chess-knight"></i>Soccer DBMS </a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="../../../index.html">Search</a></li><!--
	--><li><a href="../../matches.php">Matches</a></li><!--
	--><li><a href="../../operations.php">Operations</a></li><!--
	   --><li><a href="../../logs.php">Logs</a></li><!--
	      --><li><a href="../../database.php">Database</a></li><!--
   --><li><a href="../../about.html">About</a></li>
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

<div class="s003">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "football_league";


$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	

$inputid = $_POST["choices-single-defaul"];



$fname=$lname=$position=$weight=$height=$nationality=$kitinteger=$team="";

$sql_P = "Select * from football_league.player where playerid = $inputid";
$queryP=mysqli_query($conn,$sql_P);
    if($queryP)
     {while($row=$queryP->fetch_assoc()){
		$playerid=$row["PLAYERID"];
		$fname=$row["FNAME"]; 
        $lname=$row["LNAME"];
        $position=$row["POSITION"]; 
        $weight=$row["WEIGHT"]; 
		$height=$row["HEIGHT"]; 
        $nationality=$row["NATIONALITY"];
		$kitinteger=$row["KITINTEGER"];
		$team=$row["TEAMNAME"];
	 }}
     ?>


	
	<div class="s003" >
	<h1>Player Details Update</h1>
	<form method="post" action="player_update.php" style="display:block;" >  
	
		<div>
		<h3>Player ID : <input id="playerid" type="number" name="playerid" value=<?php echo $playerid?> readonly style="margin-left:22px;"></h3>
		</div><div>
		<h3>First Name : <input id="fname" type="text" name="fname"  value=<?php echo $fname?> style="margin-left:3px;"></h3>
		</div><div>

		<h3>Last Name : <input id="lname" type="text" name="lname"  value=<?php echo $lname?> style="margin-left:4px;">
			</h3>
				</div><div>
		<h3>Position : <input id="postion" type="text" name="position" value=<?php echo $position?> style="margin-left:30px;">
			 </h3>
				</div><div>

		<h3>Weight : <input id="weight" type="number" name="weight" value=<?php echo $weight?> style="margin-left:36px;">
			</h3>
				</div><div>
		<h3>Height : <input id="height" type="number" name="height" value=<?php echo $height?> style="margin-left:41px;">
			</h3>
				</div><div>
		<h3>Nationality :   <input id="nationality" type="text" name="nationality" value=<?php echo $nationality?> style="margin-left:3px;">
			</h3>
			</div><div>
				
		<h3>Kit Number : <input id="number" type="number" name="number" value=<?php echo $kitinteger?>>
			</h3>
				</div><div>
		<h3>Team : <input type="text" name="team" value=<?php echo $team?> style="margin-left:49px;">
			</h3>
				</div>
			
		<input type="submit" name="submit" value="Submit" onClick="player_update.php"  class="button button1">  
</form>
</div>
	


		
	
	
	

	</body>
	</html>