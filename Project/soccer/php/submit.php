<html>
<head>
	<title>Soccer Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="../images/icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link type="text/css" rel="stylesheet" href="../css/navbar.css">
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link a href="../css/main.css" rel="stylesheet" />

<nav id="navbar" class="navigation-bar">
  <div class="nav-wrapper">
      <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="../index.html"><i class="fas fa-chess-knight"></i>Soccer DBMS </a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="../index.html">Search</a></li><!--
	--><li><a href="matches.php">Matches</a></li><!--
	--><li><a href="operations.php">Operations</a></li><!--
	   --><li><a href="logs.php">Logs</a></li><!--
	      --><li><a href="database.php">Database</a></li><!--
   --><li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>


<style>
table {
    border-left:1px solid #ddd;
	border-right:1px solid #ddd;
	border-top:1px solid #ddd;
	background:white;
}
td,th {
	padding:15px;
text-align:center;
border-left:1px solid #ddd;
	border-bottom:1px solid #ddd;
	
	}
tr:nth-child(even) {
  background-color: #dddddd;
}		

br {display:none;}

</style>

</head>
<body style="position:fixed; width:100%;">
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

$inputchoice = $_POST["choices-single-defaul"];
$inputtext=$_POST["searchtext"];
?>

<?php
if($inputchoice=="Player Name" || $inputchoice=="Player ID"){
	
	if($inputchoice=="Player Name"){
		$sql = "SELECT * FROM football_league.player p, football_league.stats s WHERE ( fname=\"$inputtext\" OR lname=\"$inputtext\" ) AND p.playerid=s.playerid ";
		$result = $conn->query($sql);
	} else {
		$sql = "SELECT * FROM football_league.player p, football_league.stats s WHERE p.playerid=\"$inputtext\" and p.playerid=s.playerid ";
		$result = $conn->query($sql);
	}		
	?>
<div class="s003">
<table>
<th>Player ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Position</th>
<th>Weight</th>
<th>Height</th>
<th>Naitonality</th>
<th>Number</th>
<th>Team</th>


	<?php 
	echo "<tbody>";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["PLAYERID"] ."</td><td>". $row["FNAME"] . "</td><td>" . $row["LNAME"]. "</td><td>". $row["POSITION"]. "</td><td>". $row["WEIGHT"]. "</td><td>". $row["HEIGHT"]. "</td><td>". $row["NATIONALITY"]."</td><td>".$row["KITINTEGER"]. "</td><td>" . $row["TEAMNAME"]. "</td><br>";
			echo "</tr>";
		}
	}
	echo "</tbody>";
	?>
</table>

<?php
}
else if($inputchoice=="Team Name"){
	$sql = "SELECT * FROM football_league.team WHERE TEAMNAME=\"$inputtext\"";
	$result = $conn->query($sql);
	?>
<table>
<th>Team Name</th>
<th>Abbreviation</th>
<th>Website</th>
<th>City</th>
<th>Points</th>

	<?php 
	echo "<tbody>";
	if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["TEAMNAME"] ."</td><td>". $row["ABB"] . "</td><td>" . $row["WEBSITE"]. "</td><td>". $row["CITY"]. "</td><td>". $row["POINTS"]. "</td><br>";
			echo "</tr>";
		}
	}
	echo "</tbody>";
?>
</table>


<?php
}
else if($inputchoice=="Coach Name"){
	$sql = "SELECT * FROM football_league.coach WHERE FNAME=\"$inputtext\" OR LNAME=\"$inputtext\"";
	$result = $conn->query($sql);	
?>
<table>
<th>Coach ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone No.</th>
<th>Type</th>
<th>Team</th>

	<?php 
	echo "<tbody>";
	if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["COACHID"] ."</td><td>	". $row["FNAME"] . "</td><td>	" . $row["LNAME"]. "</td><td>	". $row["PHONENO"]. "</td><td>	". $row["TYPE"]. "</td><td>	". $row["COACHES"]. "</td><br>";
			echo "</tr>";
		}
	}
		echo "</tbody>";
?>
</table>
<?php
		
}else if($inputchoice=="Nationality"){
	$sql="SELECT * FROM player WHERE nationality=\"$inputtext\"";
	$result = $conn->query($sql);
	?>
<table>
<th>First Name</th>
<th>Last Name</th>
<th>Position</th>
<th>Nationality</th>
<th>Team</th>

	<?php 
	echo "<tbody>";
	if ($result->num_rows > 0) {
		//echo "<tbody>";
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["FNAME"] ."</td><td>". $row["LNAME"] . "</td><td>" . $row["POSITION"]. "</td><td>". $row["NATIONALITY"]. "</td><td>". $row["TEAMNAME"]. "</td><br>";
			echo "</tr>";
		}
	//echo "</tbody>";
	}
	echo "<tbody>";
?>
</table>
<?php
}
else{
	echo "wrong choice";
}

$conn->close();
?>

</tbody>
</div>
</body>
</html>