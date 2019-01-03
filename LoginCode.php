<?php
//session_start();
mysql_connect('localhost','root','');
mysql_select_db("demo6");
$username="";
$email="";
$errors=array();
/*
if(isset($_POST['login'])){
	$username=$_POST['username'];
	
	$password_1=$_POST['password_1'];
	
	// Ensure that form fields are fill property
	if(empty($username))
	{
		array_push($errors,"UserName is requierd");   //add error to errors array
	}
	if(empty($password_1))
	{
		array_push($errors,"Password is requierd"); 
	}
	
	if(isset($_REQUEST['login']))
	{
		 $passw=md5($password_1); // enctype password before with from data 
		 $query ="select * from users where username ='$username' and password ='$passw'";
		//print_r($query);die;
		$result = mysql_query($query);
		if(mysql_num_rows($result)>0)
		{
				//   $fetch = mysql_fetch_array($result);
				   
				//   $_SESSION['userid']=$fetch['username'];
				   $_SESSION['userid']=$username;
				   
	               $_SESSION['success']="You are now logged in";
	               header("location:profile.php");
		}
		else
		{
			array_push($errors,"Woring user/password is not match");
			header("location:Login.php");
		
		}
	}
	} 

	*/
	
	if(isset($_POST['login'])){
	$username= mysql_real_escape_string($_POST['username']);
	
	$password= mysql_real_escape_string($_POST['password_1']);
	
	// Ensure that form fields are fill property
	if(empty($username))
	{
		array_push($errors,"UserName is requierd");   //add error to errors array
	}
	if(empty($password))
	{
		array_push($errors,"Password is requierd"); 
	}
	
	if(count($errors)==0)
	{
		$password=md5($password); // enctype password before with from data 
		$query ="select * from users where username ='$username' and password ='$password'";
		//print_r($query);die;
		$result = mysql_query($query);
		//var_dump($result);die();

		if(mysql_num_rows($result)>0)
		{
				   $_SESSION['username']=$username;
	               $_SESSION['success']="You are now logged in";
				//   echo $username;die;
	               header("location:profile.php");
				   
		}
		else
		{
			
			
			array_push($errors,"Woring user/password combination");
		}
	}
	}
?>    
