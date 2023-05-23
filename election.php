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

	<p><font color="#3244cd" style="text-decoration:underline 1px blue"><h2>Choose Election :</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">Tap here for : Election 1</font>&nbsp;&nbsp;</td><td><button class="btn btn-primary" name="el1"><i class="icon-ok icon-large"></i>&nbsp;Check</button></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Tap here for : Election 2</font>&nbsp;&nbsp;</td><td><button class="btn btn-primary" name="el2"><i class="icon-ok icon-large"></i>&nbsp;Check</button></td></tr>
	<tr><td>...<td></tr>
    <tr><td></td><td>	<button class="btn btn-primary" name="Can"><i class="icon-ok icon-large"></i>&nbsp;Candidater</button>
</body>
</html>

<?php

if (isset($_POST['el1'])){
_redirect('voting.php');              
}else if(isset($_POST['el2'])){
    _redirect('voting2.php'); 
}else if(isset($_POST['Can'])){
    _redirect('candidate.php'); 
}
            
?>