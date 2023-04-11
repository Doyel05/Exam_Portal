<html>
<body>
<table border="5px" width="500px">
<form method="GET">
<tr><td>Course-ID</td><td><input type="text" name="ci"></td><tr>
<tr><td>Type</td><td><input type="text" name="ty"></td><tr>
<tr><td>Question</td><td><input type="text" name="qu"></td><tr>
<tr><td>Option 1</td><td><input type="text" name="o1"></td><tr>
<tr><td>Option 2</td><td><input type="text" name="o2"></td><tr>
<tr><td>Option 3</td><td><input type="text" name="o3"></td><tr>
<tr><td>Option 4</td><td><input type="text" name="o4"></td><tr>
<tr><td>Answer</td><td><input type="text" name="an"></td><tr>
<tr><td><input type="Submit"></td><tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_GET['ci']))
{
	$b=$_GET['ci'];
	$c=$_GET['ty'];
	$d=$_GET['qu'];
	$e=$_GET['o1'];
	$f=$_GET['o2'];
	$g=$_GET['o3'];
	$h=$_GET['o4'];
	$i=$_GET['an'];
	$con=mysqli_connect("localhost","root","","Eportal");
	$sql="insert into questions (cid,type,ques,opt1,opt2,opt3,opt4,ans)values('$b','$c','$d','$e','$f','$g','$h','$i')";
	$r=mysqli_query($con,$sql);
	if($r==1)
	{
		echo ("Saved");
	}
	else
	{
		echo ("Not Saved");
	}
}
?>