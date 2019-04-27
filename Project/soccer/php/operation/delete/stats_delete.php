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

<div class="s003">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "football_league";

//Create Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$input_id=$_POST["playerid"];

#Stored Procedure

$dpforstats= mysqli_query($conn, "CREATE DEFINER=`root`@`localhost` PROCEDURE `statsDelete`(IN `p_id` INT(11)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER DELETE FROM stats WHERE playerid=p_id");

$call = "CALL statsDelete('$input_id')";

//$result_S = $conn->query($sql_G);
	
$result_S = mysqli_query($conn, $call);	
	if ($result_S === TRUE) {
    echo "Record deleted successfully";
	header("Location:../../../html/success_delete.html");
} else {
    echo "Error: " . $sql_G . "<br>" . $conn->error;
	header("Location:../../../html/unsuccessful.html");
}


	?>
</div>
	</body>
	</html>