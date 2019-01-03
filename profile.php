 <?php
 ob_start();
 include ("LoginCode.php")?>
<?php include ("RegistrationCode.php")?>
<?php
mysql_connect('localhost','root','');
mysql_select_db("demo6");
?>
<html>
<head>
<title> User Login System using PHP </title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="style.css">  -->
</head>
<body>
<div class="header">
<h2>Profile Page</h2>
</div>
<div class="content">
<?php if(isset($_SESSION["success"]))?>
<div class="error success">
<h3>
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
//die;
?>
</h3>
</div>

<?php if(isset($_SESSION["userid"]))?>
<p>Welcome<strong style ="color:green">&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $_SESSION['userid'];?></strong></p>
<p><a href="Logout.php?logout='1'"style="color:red;">Logout </a></p>

</div>
</form>
</body>
</html>
