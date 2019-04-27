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
table, th, td {
    border: 1px solid black;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 50px;
}
div {
	margin:2px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}



br {display:none;}
table {margin:80px;}



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
?>	


	<div>	
<form method="post" action="operation/insert.php">
<div class="s003">
<div class="input-field first-wrap" >
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="">Table</option>
				<option >Player</option>
                <option>Goal</option>
                <option>Stats</option>
                <option>Coach</option>
              </select>
            </div>
          </div>

<button class="button" style="vertical-align:middle" onclick="insert.php"><span>Insert</span></button>
 
 </div>
</form>


<form method="post" action="operation/update.php">
<div class="s003"  >
<div class="input-field first-wrap" >
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="">Table</option>
				<option>Player</option>
                <option>Stats</option>
                <option>Coach</option>
              </select>
			  
            </div>
          </div>

<button class="button" style="vertical-align:middle" onclick="operation/update.php"><span>Update</span></button>
 
 </div>
</form>
	<form method="post" action="operation/delete.php">
<div class="s003"  >
<div class="input-field first-wrap" >
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul" style="padding:20px; font-size: 160%;">
                <option placeholder="">Table</option>
                <option>Goal</option>
                <option>Stats</option>
                <option>Coach</option>
              </select>
            </div>
          </div>
<button class="button" style="vertical-align:middle" onclick="delete.php"><span>Delete</span></button>
 
 </div>
</form>
</div>
 </body>
</html>