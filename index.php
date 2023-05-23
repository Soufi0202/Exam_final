<?php session_start() ?>
<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
 ?>
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

	<p><font color="white"><h2>Voter Login</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Login"><i class="icon-ok icon-large"></i>&nbsp;Login</button>
	<button class="btn btn-primary" name="register"><i class="icon-ok icon-large"></i>&nbsp;Register</button>
	
	</td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	<div class="error">
			<?php
			
if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$login_query=mysqli_query($conn,"select * from users where username='$UserName' and password='$Password' ");
//
$count=mysqli_num_rows($login_query); 

if($count >0){
	$_SESSION['id']=$row['user_id'];
	_redirect('election.php');
	}

}
if (isset($_POST['register'])){

	_redirect('register.php');
	
}

?>
</div>
</div>
</br>
</br>
</br>
</br>
</br>

	<?php include('footer.php')?>	
</div>

    </body>
	
</html>
																				
											
	