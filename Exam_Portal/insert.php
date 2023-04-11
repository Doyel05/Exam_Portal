<html>
<body>
<table border="3px">
<form method="get">
<tr><td>Name</td><td><input type="text" name="p2"></td></tr>
<tr><td>Email</td><td><input type="email" name="p3"></td></tr>
<tr><td>Address</td><td><input type="text" name="p4"></td></tr>
<tr><td>Phone Number</td><td><input type="number" name="p5"></td></tr>
<tr><td>Password</td><td><input type="password" name="p6"></td></tr>
<tr><td>Course name</td><td><input type="text" name="p7"></td></tr>
<tr><td>Alternate Phone Number</td><td><input type="number" name="p8"></td></tr>
<tr><td>Pincode</td><td><input type="number" name="p9"></td></tr>
<tr><td><input type="submit"></td></tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_GET['p2']))
{
	$b = $_GET['p2'];
	$c = $_GET['p3'];
	$d = $_GET['p4'];
	$e = $_GET['p5'];
	$f = $_GET['p6'];
	$g = $_GET['p7'];
	$h = $_GET['p8'];
	$i = $_GET['p9'];
	$con = mysqli_connect("localhost","root","","eportal");
	$sql = "insert into student(name,email,address,pno,pwd,course_name,apno,pincode)values('$b','$c','$d','$e','$f','$g','$h','$i')";
	$r = mysqli_query($con,$sql);
	if($r == 1)
		echo"Done";
	else
		echo"Not Done";
}
?>