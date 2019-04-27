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
</style>

	</head>

  <body>
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
echo "Connected successfully<br>";	

$inputchoice = $_POST["choices-single-defaul"];


if($inputchoice=="Goal"){
	$sqlP = "Select goalid, playerid from football_league.goal order by playerid ASC";
	$resultP = $conn-> query($sqlP);
	?>
	<div class="s003">
	<form action="delete/gdelete.php" method="post">
		<select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="Select">Select ID</option>
				<?php
				if($resultP){
            while($row = $resultP->fetch_assoc())
            {
             echo "<option value='".$row[goalid]."'>Goal ID: \"".$row[goalid]."\" belongs to Player ID: \"".$row[playerid]."\"</option>";
            }               
		}
				?>
				
			
                
              </select>
			  <button onClick="delete/gdelete.php" style="margin:20px; padding:20px; font-size: 160%;">Submit</button>
				
	</form>
 </div>
	<?php
}
else if($inputchoice=="Stats"){
	$sqlS = "Select playerid from football_league.stats order by playerid ASC";
	$resultS = $conn-> query($sqlS);
	?>
	<div class="s003">
	<form action="delete/sdelete.php" method="post">
		<select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="">Player ID</option>
				<?php
				if($resultS){
            while($row = $resultS->fetch_assoc())
            {
             echo "<option value='".$row[playerid]."'>".$row[playerid]."</option>";
            }               
		}
				?>
				
			
                
              </select>
			  <button onClick="delete/sdelete.php" style="margin:20px; padding:20px; font-size: 160%;">Submit</button>
			 </form>	
	</div>
	<?php
}

else if($inputchoice=="Coach"){
	$sqlC = "Select coachid from football_league.coach order by coachid ASC";
	$resultC = $conn-> query($sqlC);
	?>
	<div class="s003">
	<form action="delete/cdelete.php" method="post">
		<select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="">Coach ID</option>
				<?php
				if($resultC){
            while($row = $resultC->fetch_assoc())
            {
             echo "<option value='".$row[coachid]."'>".$row[coachid]."</option>";
            }               
		}
				?>
				
			
                
              </select>
			  <button onClick="delete/cdelete.php" style="margin:20px; padding:20px; font-size: 160%;">Submit</button>
			 </form>
</div>			 
	
	<?php
}






else if($inputchoice=="Table"){
 ?>
 <div class="s003" >
	
<h2>Please select a table.</h2>	
		
		</div>
<?php
}

 ?>  
  
 

   
   </body>
</html>