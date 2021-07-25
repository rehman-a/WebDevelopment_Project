<?php
$host='localhost';
$username='root';
$password='';
$database='project';
$conn=mysqli_connect($host, $username, $password, $database);

$result = mysqli_query($conn, "SELECT * FROM postajob ORDER BY JobID DESC"); 
?>
<html>
<head>
	<style type=”text/css”>
h2 {
    margin: 8px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    background: #666;
    color: #FFF;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid #000;
}
</style>

	<title>Jobs</title>
	<link rel="stylesheet" type="text/css" href="Project.css">
</head>

<body style="background-color:#F7E70F;">
	<br>
	<br>
	<?php 
	echo "<table>";
	while($res = mysqli_fetch_array($result)) { 
		echo "<center>";
		echo "<br>";
		echo "<h2 color:'red';> JOB: <br>";
		echo "<h2>Job ID: ".$res['JobID']."</h2>";
		echo "<h2> Title: ".$res['Title']."</h2>";
		echo "<h2>  Description: ".$res['Description']."</h2>";
		echo "<h2> Extra Information: ".$res['Extra']."</h2>";
		echo "<h2> Days To Complete Job:".$res['Days']."</h2>";
		echo "<h2> Tokens Required to Apply: ".$res['Tokens']."</h2>";
		echo "____________________________";
			
	}
	?>
</body>
</html>