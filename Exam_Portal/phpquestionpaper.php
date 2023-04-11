<?php
	$con=mysqli_connect("localhost","root","","eportal");
	$sql="select * from questions where cid='HTML'";
	$s=mysqli_query($con,$sql);
?>
<html>
<style>

</style>
<head>
<title>PHP Multiple Choice Questions and Answers</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="css/TimeCircles.css" />
<script src="js/TimeCircles.js"></script>
<script src="js/user_exam.js"></script>	
<script src="js/general.js"></script>
<?php include('inc/container.php');?>
<div class="container" style="background-color:#f4f3ef;">  
	<h2>Online Exam System</h2>	
	<?php include('a.php'); ?>	
	<br>	
	<div id="processExamId" data-exam_id="<?php echo $examDetails['id']; ?>"> 	
<?php 
</head>
<body>
<div class="container">
<h1>Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions :-</p>
<form action="score.php" method="get">

<?php
while($r=mysqli_fetch_array($s))
{
?> 
<h3>Ques : <?php echo $r['ques'];?></h3>
<ol>
<li>
<input type="radio" name="q2" value="1" /><?php echo $r['opt1'];?>
</li>
<li>
<input type="radio" name="q2" value="2" /><?php echo $r['opt2'];?>
</li>
<li>
<input type="radio" name="q2" value="3" /><?php echo $r['opt3'];?>
</li>
<li>
<input type="radio" name="q2" value="3" /><?php echo $r['opt4'];?>
</li>
</ol>
</div>
<br/>
<?php
}
?>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>
</html>