<html>
  <head>
      <title>Soccer Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="../images/01.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link type="text/css" rel="stylesheet" href="../css/navbar.css">
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
	
	
	
	<nav id="navbar" class="navigation-bar">
  <div class="nav-wrapper">
      <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="../index.html"><i class="fas fa-chess-knight"></i>Soccer DBMS</a>
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
	margin:3%;
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

$fmatchid = $_POST["matchid"];
echo $fmatchid;
$fresult=$_POST["result"];
$fhometeam = $_POST["hometeam"];
$fawayteam = $_POST["awayteam"];
$fhost = $_POST["host"];
$ftemp = $_POST["temp"];
$fprecip = $_POST["precip"];
$fhumid = $_POST["humid"];

	 $sql2="Insert into football_league.matches(matchid, result, hometeam, awayteam, hostedby, temp_deg, precip_percent, humid_percent) values(\"$fmatchid\", \"$fresult\", \"$fhometeam\", \"$fawayteam\", \"$fhost\", \"$ftemp\", \"$fprecip\", \"$fhumid\")";
$result2 = $conn->query($sql2);
	if ($result2 === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
	//header("Location:../html/unsuccessful.html");
}
$sql = "SELECT * FROM football_league.matches";
	$result = $conn->query($sql);
	

	?>
<div class="s003">
<table>
<th>Match ID</th>
<th>Result</th>
<th>Home Team</th>
<th>Away Team</th>
<th>Hosted By</th>
<th>Temperature (Celsius)</th>
<th>Precipitation (%)</th>
<th>Humidity (%)</th>

	<?php
	$count=1;
	echo "<tbody>";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["MATCHID"] ."</td><td>". $row["RESULT"] . "</td><td>" . $row["HOMETEAM"]. "</td><td>". $row["AWAYTEAM"]. "</td><td>". $row["HOSTEDBY"]. "</td><td>". $row["TEMP_DEG"]. "</td><td>". $row["PRECIP_PERCENT"]."</td><td>".$row["HUMID_PERCENT"]. "</td><br>";
			echo "</tr>";
			$count++;
		}
	}
	echo "</tbody>";
?>

<tr>
<form class="form-inline" action="match.php" method="post">
	<td style="border:3px solid #ddd;"><input type="number" id="matchid" value=<?php echo $count ?> name="matchid" style="width:100%;"></td>
	<td style="border:3px solid #ddd;"><input type="text" id="result" placeholder="Result" name="result" style="width:100%;"></td>
	<td style="border:3px solid #ddd;"><input type="text" id="hometeam" placeholder="Home Team" name="hometeam" style="width:100%;"></td>
    <td style="border:3px solid #ddd;"><input type="text" id="awayteam" placeholder="Away Team" name="awayteam" style="width:100%;"></td>
    <td style="border:3px solid #ddd;"><input type="text" id="host" placeholder="Hosted By" name="host" style="width:100%;"></td>
    <td style="border:3px solid #ddd;"><input type="number" id="temp" placeholder="Temperature" name="temp" style="width:100%;"></td>
    <td style="border:3px solid #ddd;"><input type="number" id="precip" placeholder="Precipitation" name="precip" style="width:100%;"></td>
    <td style="border:3px solid #ddd;"><input type="number" id="humid" placeholder="Humidity" name="humid" style="width:100%;"></td>
	
<button type="submit" name="submit" value="submit" onClick="match.php"></button> 
</form>
</tr>  


</table>
</div>
  </body>
</html>
