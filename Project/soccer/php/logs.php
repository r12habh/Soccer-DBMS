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
    <link href="../css/main.css" rel="stylesheet" />
	
	
	
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

br {display:none;}


table {
    border-left:1px solid #ddd;
	border-right:1px solid #ddd;
	border-top:1px solid #ddd;
	background:white;
	margin:4%;
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

</style>

	</head>

  <body>
   
<div class="s003" style="display:block;">
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
?>	

<?php
	$sql = "SELECT * FROM football_league.insert_triggers";
	$result = $conn->query($sql);
	?>	
<div class="s003" style="display:block; margin-top:80px;">	
<h2>Insert Log</h3>	
<table>
<th>ID</th>
<th>Table</th>
<th>Action</th>
<th>Time</th>

	<?php
	echo "<tbody>";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["ID"] ."</td><td>" .$row["TABLENAME"] . "</td><td>". $row["ACTION"] . "</td><td>" . $row["TIME"]. "</td><br>";
			echo "</tr>";
		}
	}
	echo "</tbody>";
?>
</table>
</div> <div class="s003" style="display:block;">	
<?php
$sql = "SELECT * FROM football_league.update_triggers";
	$result = $conn->query($sql);
	?>
<h2>Update Log</h2>	
<table>
<th>ID</th>
<th>Table</th>
<th>Action</th>
<th>Time</th>

	<?php
	echo "<tbody>";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["ID"] ."</td><td>" .$row["TABLENAME"] ."</td><td>". $row["ACTION"] . "</td><td>" . $row["TIME"]. "</td><br>";			
			echo "</tr>";
		}
	}
	echo "</tbody>";
?>
</table>

</div><div class="s003" style="display:block;">	
<h2>Delete Log</h2>
<?php
	$sql = "SELECT * FROM football_league.delete_triggers";
	$result = $conn->query($sql);
	?>	
<table>
<th>ID</th>
<th>Table</th>
<th>Action</th>
<th>Time</th>


	<?php
	echo "<tbody>";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td> " . $row["ID"] ."</td><td>" .$row["TABLENAME"] ."</td><td>". $row["ACTION"] . "</td><td>" . $row["TIME"]. "</td><br>";	
			echo "</tr>";
		}
	}
	echo "</tbody>";
?>
</table>
</div>






 </body>
</html>
