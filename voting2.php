<?php 
include('dbcon.php');
include('header.php');
 ?>
 <link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner" >
	<div class="container" >
	     
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
<div class="wrapper">

<div class="hero-body-voting" style="background-color:#1f79d9">
<div class="vote_wise" ><font color="white" size="6">"Please Vote Wisely"</font></div>
<div class="help">
</div>
</div>
<form method ="post" action="vote.php">



<div class="vice-align" style="position:relative;right:25%">
<div class="hero-body-candidate1" style="background-color:#1f79d9">
<font color="white">Candidate for Vice-Governor</font>
</div>

<div class="governor" >
<div class="gov-margin">
<?php 
$vice=mysqli_query($conn,"select * from candidate where Position='Vice-Governor'")or die(mysqli_error());
while($row=mysqli_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" >
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="select_gov" style="background-color:#1f79d9">
<div class="margin-gov">
<select name="vice" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$vice=mysqli_query($conn,"select * from candidate where Position='Vice-Governor'")or die(mysqli_error());
while($row=mysqli_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>
<option value="<?php echo $vice_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>











<div class="thumbnail_widget">

<div class="submit-vote">

	<button id="save_voter"  id="vote" class="btn btn-success" name="save"><i class="icon-thumbs-up icon-large"></i>&nbsp;Submit Vote</button>
</div>
</div>

<div class="thumbnail_widget1">

<div class="submit-vote">

	<a class="btn" id="index" data-toggle="modal" href="#myModal"><i class="icon-circle-arrow-left icon-large"></i>&nbsp;Vote later</a>
</div>
</div>






</form>
</br>

<div class="foot">
	<?php include('footer1.php')?>
</div>	
</div>

    </body>
	
</html>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Vote Later?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout_back.php" class="btn btn-success">Yes</a>
		</div>
		</div>		