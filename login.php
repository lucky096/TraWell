<?php
session_start();
//opening page
include("function.php");

$f = new functiona();

//received values from form
$u_name=$_POST["u_name"];
$password=$_POST["password"];
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$city=$_POST["city"];
$state=$_POST["state"];
$cmd=$_POST["cmd"];
//$interests=$_POST["interests"];
//echo $cmd;
if($cmd=='Log In')
{
	if(!$u_name || !$password) 
	{
		//$q="Wrong username or password.";
		header("Location: startbootstrap-creative-1.0.0/index.html");
	}
	else
	{
		//$r=array();
		$row=array();
		$sql = "Select password from user where u_name = '$u_name'";
		$r = $f->exe($sql);
		$row = mysqli_fetch_row($r);
		$encrypted_password=md5($password);
		//echo $encrypted_password;
		if($row[0]==$encrypted_password)
		{
			//echo "Now you have logged in. To chat with any user select user from below.";
			
			header("Location: startbootstrap-creative-1.0.0/profile.php?u_name=$u_name");
		}
		/*else 
		{
			//$q="Wrong username or password.";
			header("Location: startbootstrap-creative-1.0.0/index.html");
		}*/
	}
}
else if($cmd=='Sign Up')
{
	$encrypted_password=md5($password);
	//echo $cmd;
	$sql = "insert into user values ('$u_name','$encrypted_password','$name','$email','$gender','$dob','$city','$state')";
	$f->exe($sql);
	//echo $sql;
	header("Location: startbootstrap-creative-1.0.0/index.html");
}
?>
