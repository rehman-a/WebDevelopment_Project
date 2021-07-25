<?php
$host="localhost";
$username="root";
$password="";
$database="project";
$conn=new mysqli($host, $username, $password, $database);
if(isset($_POST['Signinemail']) && isset($_POST['SigninPassword'])){

$username=$_POST['Signinemail'];
$password=$_POST['SigninPassword']; 
$sql="select * from signup WHERE Email='".$username."'AND Password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1){
	echo"Login Successful";
	header("Location: ./AftersignIn.html");
	}
	else{
		echo "Incorrect Username or Password";
		exit();
	}
}
	
?>