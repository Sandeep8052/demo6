<?php include ("RegistrationCode.php")?>
<?php include ("LoginCode.php")?>
<html>
<head>
<title> User Login System using PHP </title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="style.css">  -->
</head>
<body>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?index='1'"style="color:red;font-size:50px; font-style: oblique;">
Home Page </a></p>
<div class="header">

<h2>Login</h2>
</div>
<form action="Login.php"method="post">
<!-- Display validation heare  -->
<?php include ("errors.php")?>
<div class="input-group">
<label>Username<label>
<input type="text"name="username" value="<?php echo $username;?>">
</div>
<div class="input-group">
<label>Password<label>
<input type="password"name="password_1">
</div>

<div class="input-group">

<button type="submit" name="login"class="btn" >Login</button>
</div>
<p> Not yet a member?<a href="Registration.php">Sign up</a></p>
</form>
</body>
</html>