<?php
$host='localhost';
$username='root';
$password='';
$database='project';
$conn=mysqli_connect($host, $username, $password, $database);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['phonenumber']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $name=$_POST['name'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query1="select * from signup where PhoneNumber='$phonenumber'";
        $run1=mysqli_query($conn,$query1);
        if(mysqli_num_rows($run1)>0){
            echo "Record Already Exists with this Information";

        }
        else{
        $query="insert into signup(Name, PhoneNumber, Email, Password) values('$name','$phonenumber','$email','$password')";
        $run=mysqli_query($conn, $query);
        if($run){
            echo "Form Submitted Successfully ";
        }
        else{
            echo "An error has occured";
        }
        
      }  

    }
    else{
        echo "All fields are required";
    }
}

?>