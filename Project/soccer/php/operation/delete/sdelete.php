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
  padding: 12px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}


.button3 {
  background-color: white; 
  color: #f44336; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
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



$redcards=$yellowcards=$goals=$assists=$assists=$cleansheets="";

$sql_S = "Select * from football_league.stats where playerid = $inputid";
$queryS=mysqli_query($conn,$sql_S);
    if($queryS)
     {while($row=$queryS->fetch_assoc()){
		$playerid=$row["PLAYERID"];
		$redcards=$row["REDCARDS"]; 
        $yellowcards=$row["YELLOWCARDS"];
        $goals=$row["GOALS"]; 
        $assists=$row["ASSISTS"]; 
		$cleansheets=$row["CLEANSHEETS"]; 
        
	 }}
     ?>


	
	<div class="s003" >
	<h1>Player Stats</h1>
	<form method="post" action="stats_delete.php" style="display:block;" >  
	
		<div>
		<h3>Player ID : <input id="playerid" type="number" name="playerid" value=<?php echo $playerid?> readonly style="margin-left:45px;"></h3>
		</div><div>
		<h3>Red Cards : <input id="redcards" type="number" name="redcards"  value=<?php echo $redcards?> readonly style="margin-left:28px;"></h3>
		</div><div>

		<h3>Yellow Cards : <input id="yellowcards" type="number" name="yellowcards"  value=<?php echo $yellowcards?> readonly style="margin-left:4px;">
			</h3>
				</div><div>
		<h3>Goals : <input id="goals" type="number" name="goals" value=<?php echo $goals?> readonly style="margin-left:70px;">
			 </h3>
				</div><div>

		<h3>Assists : <input id="assists" type="number" name="assists" value=<?php echo $assists?> readonly style="margin-left:60px;">
			</h3>
				</div><div>
		<h3>Cleansheets : <input id="cleansheets" type="number" name="cleansheets" value=<?php echo $cleansheets?> readonly style="margin-left:6px;">
			</h3>
				</div><div>
		
			
		<input type="submit" name="submit" value="Delete" onClick="stats_delete.php"  class="button3 button">  
</form>
</div>
	


		
	
	
	

	</body>
	</html>