<?php
$host="localhost";
$username="root";
$password="";
$database="project";
$conn=new mysqli($host, $username, $password, $database);
if(isset($_POST['submit'])){
	{
		$Title=$_POST['JobTitle'];
		$Description=$_POST['description'];
		$Extra=$_POST['ExtraInformation'];
		$Days=$_POST['Days'];
		$Tokens=$_POST['Tokens'];
		$query="insert into postajob(Title,Description,Extra, Days, Tokens) values('$Title','$Description', '$Extra', '$Days', '$Tokens') ";
		$run=mysqli_query($conn, $query) or die(mysqli_connect_error("Error"));
		if($run){
			echo "Job Submitted Successfully";
			header("Location: ./AftersignIn.html");
		}
		else {
			echo "Some Error has occured";
		}


	}
}
?>