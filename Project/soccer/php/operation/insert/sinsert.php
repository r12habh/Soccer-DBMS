<html>
  <head>
      <title>Soccer Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="../images/icon.jpg">
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
      <li><a href="../index.html">Search</a></li><!--
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


$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";	


$ifplayerid=$_POST["playerid"];
$ifred = $_POST["red"];
$ifyellow = $_POST["yellow"];
$ifgoal = $_POST["goals"];
$ifassists = $_POST["assists"];
$ifclean = $_POST["clean"];

	 $sql_p="Insert into football_league.stats(playerid, redcards, yellowcards, goals, assists, cleansheets) values(\"$ifplayerid\", \"$ifred\", \"$ifyellow\", \"$ifgoal\", \"$ifassists\", \"$ifclean\")";
$result_p = $conn->query($sql_p);
	if ($result_p === TRUE) {
    echo "New record created successfully";
	header("Location:../../../html/success.html");
} else {
    echo "Error: " . $sql_p . "<br>" . $conn->error;
	header("Location:../../../html/unsuccessful.html");
}


	?>
</div>
	</body>
	</html>