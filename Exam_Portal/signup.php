<html>
<style>
body{
margin:0;
padding:0;
font-family: 'Ubuntu', sans-serif;
background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/exam4.jpg);
background-postion:center;
background-size:cover;
postion:relative;
}
nav{
display:flex;
padding:2% 6%;
justify-content:space-between;
align-items:center;
}
nav img{
width:120px;
}
.nav-links{
flex:1;
text-align:right;
}
.nav-links ul li{
list-style:none;
display:inline-block;
padding:8px 12px;
position:relative;
}
.nav-links ul li a{
color:white;
text-decoration:none;
font-size:13px;
font
}
.nav-links ul li::after{
content:'';
width:0%;
height:3px;
background:#f44336;
display:block;
margin:auto;
transition:0.5s;
}
.nav-links ul li:hover::after{
width:100%;
}
.signupform{
width:300px;
box-shadow:0 0 30px 0 rgba(0,0,0,0.5);
background:white;
padding:25px;
margin:8% auto 0;
text-align:center;
}
.signupform h1{
color:cyan;
margin-bottom:30px;
}
.input-box{
border-radius:20px;
padding:10px;
margin:10px 0;
width:100%;
border:1px solid purple;
}
button{
color:white;
width:100%;
padding:10px;
border-radius:20px;
font-size:15px;
margin:10px 0;
border:none;
outline:none;
cursor:pointer;
}
.btn{
background-color:#1c8adb;
transition:0.5s;
}
.btn:hover{
color:red;
}
a{
text-decoration:none;
}
hr{
margin-top:20px;
width:80%;
}
.or{
background:white;
width:30px;
margin:-19px auto 10px;
}
</style>
<body>
<nav>
<a href="index.html"><img src="images/logo11.png"></a>
<div class="nav-links" id="navLinks">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="">ABOUT</a></li>
<li><a href="log_in.html">LOGIN</a></li>
<li><a href="signup.html">SIGNUP</a></li>
<li><a href="adminlogin.html">ADMIN</a></li>
</ul>
</div>
</nav>

<div class="signupform">
<h1>Sign Up</h1>
<form>
<input type="text" class="input-box" placeholder="Your Name" name="p1">
<input type="email" class="input-box" placeholder="Your Email" name="p2">
<input type="text" class="input-box" placeholder="Your Address" name = "p3">
<input type="number" class="input-box" placeholder="Your Phone Number" name="p4">
<input type="password" class="input-box" placeholder="Your Password" name="p5">
<input type="text" class="input-box" placeholder="Your Course Name" name="p6">
<input type="number" class="input-box" placeholder="Your Alternate Phone Number" name="p7">
<input type="number" class="input-box" placeholder="Your Pincode" name="p8">
<p><span><input type="checkbox"></span>I agree to all terms and conditions</p>
<input type="submit" class="btn">
<hr>
<p class="or">OR</p>
<p>Do you have an account already?<a href="log_in.html">Log In</a></p>
</form>
</div>
</body>
</html>
<?php
if(isset($_GET['p1']))
{
	$a = $_GET['p1'];
	$b = $_GET['p2'];
	$c = $_GET['p3'];
	$d = $_GET['p4'];
	$e = $_GET['p5'];
	$f = $_GET['p6'];
	$g = $_GET['p7'];
	$h = $_GET['p8'];

	$con = mysqli_connect("localhost","root","","eportal");
	$sql = "insert into student(name,email,address,pno,pwd,course_name,apno,pincode)values('$a','$b','$c','$d','$e','$f','$g','$h')";
	$r = mysqli_query($con,$sql);
	if($r == 1)
		echo"Done";
	else
		echo"Not Done";
}
?>