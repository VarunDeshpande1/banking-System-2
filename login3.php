<?php 
session_start();

	$emailid = $_POST['email'];
	$password = $_POST['password'];

	$conn=mysqli_connect("localhost","root","","SEPM");
	//m$conn,ysql_select_table("login");
	$result=mysqli_query($conn,"SELECT * FROM users WHERE email='$emailid' and password ='$password'") or die("Failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if ($row['email']==$emailid && $row['password']==$password){
		$_SESSION['email']=$emailid;
		header("Location: transfermoney.php");
		exit();
	}else{
		echo"Failed to Login";
	}
?>
