<?php include('dbcon.php');
include('header.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/CS.png" width="170" height="60">
 	</a>
	<a class="brand">
	 <h2>MOHAMMED 6 POLYTECHNIC UNIVERSITY</h2>
	 <div class="chmsc_nav"><font size="4" color="white">SCHOOL OF COMPUTER SCIENCE</font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper_admin">
</br>
</br>
</br>
	<div id="element" class="hero-body-index">

	<p><font color="white"><h2>Register</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Email:</font>&nbsp;&nbsp;</td><td><input type="text"  name="Email" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Register"><i class="icon-ok icon-large"></i>&nbsp;Register</button>
</body>
</html>

<?php	
if (isset($_POST['Register'])){
            
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
$register_query=mysqli_query($conn,"  INSERT INTO `users`(username,email,password,is_admin) VALUES
('$UserName', '$Email', '$Password', 'admin') ");
_redirect('index.php');         
         
}
            
?>