<?php include ("RegistrationCode.php")?>
<html>
<head>
<title> User Registration System using PHP </title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="style.css">  -->
</head>
<body>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?index='2'"style="color:red;font-size:50px; font-style: oblique;">
Home Page </a></p>

<div class="header">
<h2>Register</h2>
</div>
<form action="Registration.php"method="post">

<!-- Display validation heare  -->
<?php include ("errors.php")?>
<div class="input-group">

<label>Username<label>
<input type="text"name="username"value="<?php echo $username ;?>">
</div>
<div class="input-group">
<label>Email<label>
<input type="text"name="email"value="<?php echo $email ;?>">
</div>
<div class="input-group">
<label>Password<label>
<input type="password"name="password_1">
</div>
<div class="input-group">
<label>Confirm Password<label>
<input type="password"name="password_2">
</div>
<div class="input-group">

<button type="submit" name="register"class="btn" >Register</button>
</div>
<p> Already a member?<a href="login.php">Sign in</a></p>
</form>
</body>
</html >