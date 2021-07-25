<?php
$host="localhost";
$username="root";
$password="";
$database="project";
$conn=new mysqli($host, $username, $password, $database);
if(isset($_POST['submit'])){
    {
        $fname=$_POST['FName'];
        $lname=$_POST['LName'];
        $number=$_POST['Number'];
        $email=$_POST['Email'];
        $qualification=$_POST['Qualification'];
        $current=$_POST['CurrentStatus'];
        $others=$_POST['Others'];
        $skill1=$_POST['skill1'];
        $skill2=$_POST['skill2'];
        $skill3=$_POST['skill3'];
        $query1="select * from freelancer where email='$email'";
        $run1=mysqli_query($conn,$query1);
        if(mysqli_num_rows($run1)>0){
            echo "Record Already Exists with this Information";

        }else{
        $query="insert into freelancer(fname, lname, number, email, qualification, c_status, others, s1, s2, s3) values('$fname','$lname', '$number', '$email', '$qualification','$current', '$others', '$skill1','$skill2','$skill3') ";
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
}
?>