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

	<p><font color="white"><h2>Candidate</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">LastName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="LastName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Program:</font>&nbsp;&nbsp;</td><td><input type="text"  name="Program" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Motivation:</font>&nbsp;&nbsp;</td><td><input type="text"  name="Motivation" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Election:</font>&nbsp;&nbsp;</td><td>
    <select name="elections" >
    <option value="1">1</option>
    <option value="2">2</option>
</select>

    </td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Position:</font>&nbsp;&nbsp;</td><td>
    <select name="position" >
    <option value="Governor">Governor</option>
    <option value="Vice-Governor">Vice-Governor</option>
</select>

    </td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Candidate"><i class="icon-ok icon-large"></i>&nbsp;Candidate</button>
</body>
</html>

<?php
if (isset($_POST['Candidate'])){
            
$UserName=$_POST['UserName'];
$LastName=$_POST['LastName'];
$Program=$_POST['Program'];
$Motivation=$_POST['Motivation'];
$Election=$_POST['elections'];
$Position=$_POST['position'];
$photo ="upload/".$UserName.".jpeg";
$login_query=mysqli_query($conn,"select * from candidate where FirstName='$UserName' and LastName='$LastName' ");
//
$count=mysqli_num_rows($login_query); 
var_dump($photo);
var_dump($count);

if($count==0){
$register_query=mysqli_query($conn,"  INSERT INTO `candidate`(election_id,FirstName,LastName,Photo,Position) VALUES
('$Election', '$UserName', '$LastName', '$photo','$Position') ");
_redirect('index.php');  

}else if($count != 0){
    _redirect('vote.php');  
}
         
}
            
?>