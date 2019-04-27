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
//echo "Connected successfully<br>";	
$inputid = $_POST["choices-single-defaul"];
$fname=$lname=$phoneno=$type=$coaches="";

$sql_C = "Select * from football_league.coach where coachid = $inputid";
$queryC=mysqli_query($conn,$sql_C);
    if($queryC)
     {while($row=$queryC->fetch_assoc()){
		$coachid=$row["COACHID"];
		$fname=$row["FNAME"]; 
        $lname=$row["LNAME"];
        $phoneno=$row["PHONENO"]; 
        $type=$row["TYPE"]; 
		$coaches=$row["COACHES"]; 
        
	 }}

	?>
	<div class="s003" >
	<h1>Coach Details</h1>
	<form method="post" action="coach_delete.php" style="display:block;" >  
	
		<div>
		<h3>Coach ID : <input id="coachid" type="number" name="coachid" value=<?php echo $coachid?> readonly style="margin-left:17px;"></h3>
		</div><div>
		<h3>First Name : <input id="fname" type="text" name="fname"  value=<?php echo $fname?> readonly style="margin-left:3px;"></h3>
		</div><div>

		<h3>Last Name : <input id="lname" type="text" name="lname"  value=<?php echo $lname?> readonly style="margin-left:4px;">
			</h3>
				</div><div>
		<h3>Phone No. : <input id="phoneno" type="text" name="phoneno" value=<?php echo $phoneno?> readonly style="margin-left:10px;">
			 </h3>
				</div><div>

		<h3>Type : <input id="type" type="text" name="type" value=<?php echo $type?> readonly style="margin-left:56px;">
			</h3>
				</div><div>
		<h3>Team : <input id="coaches" type="text" name="coaches" value=<?php echo $coaches?> readonly style="margin-left:47px;">
			</h3>
				</div><div>
<input type="submit" name="submit" value="Delete" onClick="coach_delete.php"  class="button button3">  
</form>
	
</div>
	</body>
	</html>