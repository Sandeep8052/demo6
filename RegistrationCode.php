<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("demo6");
$username="";
$email="";
$errors=array();
// if register button is click
if(isset($_POST['register']))
{

$username = $_POST['username'];
//ECHO $username;
$email = $_POST['email'];
//ECHO $email;
$password_1 = $_POST['password_1'];
//ECHO $password_1;
$password_2 = $_POST['password_2'];
//ECHO $password_2;
// Ensure that form fields are fill property
	if(empty($username))
	{
		array_push($errors,"UserName is requierd");   //add error to errors array
	}
	if(empty($email))
	{
		array_push($errors,"Email is requierd"); 
	}
	if(empty($password_1))
	{
		array_push($errors,"Password is requierd"); 
	}
	if($password_1 != $password_2)
	{
		array_push($errors,"The two password is not match");
	}
	// if there is no errors save user to database
	if( count($errors)==0)
	{   
        $password=md5($password_1);//enctype password before strong in database security
		$sql="insert into users (username,email,password)values('$username','$email','$password')";
	 //   mysqli_query($db,$sql); //(Both are same any one use you )
		 $results = mysql_query($sql);
    //	echo 'Register Successfully! Now Login';
   //   exit();
	   $_SESSION['username']=$username;
	   $_SESSION['success']="You are now logged in";
	   header("location:Login.php");
	
}

	}
	?>