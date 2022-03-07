<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="sfscuhc";
	$con=mysqli_connect($host,$user,$password,$db);
	if(mysqli_connect_errno()){
		die("Failed to connect with Mysql:".mysqli_connect_errno());
	}
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		//$sql="select * from admin where email='$email'and password='$password'";
		$sql="SELECT  *  FROM admin WHERE email='$email' AND password='$password'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==1){
			header('location: ../Admin/index.php');
			exit();
		}
		else{
			
			echo "email and password is not correct";
			exit();
		}
	}
?>