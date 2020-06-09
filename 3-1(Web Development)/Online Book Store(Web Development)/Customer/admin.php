



<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['pass']))

{
$email=$_COOKIE['email'];
$pass= $_COOKIE['passs'];
header("location:show.php");

echo"<script>

    document.getElementById('email').value='$email';
     document.getElementById('pass').value='$pass';
</script";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>



<!--
	<nav>
	<div class="logo">
<img src="101.png">
<h3 style="color: white ;">SunShine Book House</h3>
</div>


		<ul>
		 <li><a href="index.php">HOME</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="login.html">LOGIN</a></li>
			<li><a href="registration.html">REGISTRATION</a></li>
			<li><a href="">FEEDBACK</a></li>
		</ul>
	</nav>I-->





<section>
	<div class="log_img">
<br><br><br>
<div class="box1">
	<br>
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Admin please enter your email and password</h1>

    <form name="login" action="admin2.php" method="post">
    	<div class="login">
    	<input class="form-control" type="text" id="email" name="email" placeholder="Email"> <br>
    	<input class="form-control" type="password" id="pass" name="password" placeholder="Password" > <br>
    	<input class="btn btn-default" type="submit" name="login" value="Login" style="color:black; width: 60px; height: 30px; background-color: grey">
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1" style="color:white; width:60px; height:30px;" >Remember Me</td></tr>

    </div>
    </form>

    

</div>
		
	</div>
</section>




</body>
</html>

