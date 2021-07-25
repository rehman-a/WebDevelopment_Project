<?php
$host='localhost';
$username='root';
$password='';
$database='project';
$conn=mysqli_connect($host, $username, $password, $database);

$result = mysqli_query($conn, "SELECT * FROM freelancer ORDER BY LancerID DESC"); 
?>
<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="Project.css">
</head>

<body style="background-color:#F7E70F;">
	<br>
	<br>
<!---
	<tr bgcolor='#CCCCCC' class="table">
		<td>Lancer ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Qualification</td>
		<td>Current Status</td>
		<td>Qualification Specification</td>
		<td>Skill 1</td>
		<td>Skill 2</td>
		<td>Skill 3</td>
	</tr>
	<br>
	   --->
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 
		echo "<center>";
		echo "<br>";
		echo "<h2> LANCER PROFILE: <br>";
		echo "<h2>Lancer ID: ".$res['LancerID']."</h2>";
		echo "<h2> First Name: ".$res['fname']."</h2>";
		echo "<h2> Last Name: ".$res['lname']."</h2>";
		echo "<h2> Qualification: ".$res['qualification']."</h2>";
		echo "<h2> Current Status: ".$res['c_status']."</h2>";
		echo "<h2> If Others(Specified): ".$res['others']."</h2>";
		echo "<h2>Skill 1: ".$res['s1']."</h2>";
		echo "<h2> Skill 2: ".$res['s2']."</h2>";
		echo "<h2> Skill 3: ".$res['s3']."</h2>";
		echo "____________________________";
			
	}
	?>
</body>
</html>