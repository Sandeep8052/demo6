<?php include ("RegistrationCode.php")?>
<?php include("LoginCode.php"); ?>
<html>
<head>
<title> User Login System using PHP </title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="style.css">  -->
</head>
<body>
<div class="header">
<h2>Home Page</h2>

<?php if(isset($_SESSION["success"]))?>
<div class="error success">
<h3>

</h3>

</div>

<center>

<p><a href="Login.php?login='1'"style="color:red; font-size:40px">Login </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<a href="Registration.php?register='2'"style="color:red;font-size:40px">Register </a></p>
</center>
</div>
</form>
</body>
</html>