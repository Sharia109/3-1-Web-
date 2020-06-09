<?php
 
include"connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
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




<header>



	<nav>
		<ul>
		 <li><a href="index.php">HOME</a></li>

			<li><a href="login.php">LOGIN</a></li>
       <li><a href="index.php">LOGOUT</a></li>
			<li><a href="registration.php">SignUp</a></li>
       <li><a href="home.php">EXIT</a></li>
		</ul>
	</nav>

</header>

<section>
	<div class="log_img">
<br><br><br>
<div class="box1">
	<br>
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Online Book Store</h1>
	<h1 style="text-align: center;font-size:25px; ">User Login Form</h1>
    <form name="login" action="" method="post">
    	<div class="login">
    	<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
    	<input class="form-control" type="password" name="password" placeholder="password" required=""> <br>
    	<input class="btn btn-default" type="submit" name="submit" value="Login" style="color:black; width: 60px; height: 30px; background-color: grey">
    </div>
    </form>

    <p style="color: white;">
   
    	<a style="color: white;" href=""> Forgot Password? </a>
    	<br>Is it your first time here?  &nbsp &nbsp <a style="color: white;" href="registration.php">Sign Up</a>
    </p>

</div>
		
	</div>
</section>



<?php

if(isset($_POST['submit']))
{
  $count=0;
  $res=mysqli_query($db,"select *from `registration` where username='$_POST[username]' && password='$_POST[password]' ;");
  $count=mysqli_num_rows($res);

  if($count==0)
  {
  ?>
   <script type="text/javascript">
   	alert("The Username and Password does not match");
   </script>


  <?php

  }

  else
  {
  	?>
    <script type="text/javascript">
    	window.location="index.php"
    </script>

  	<?php
  }


}

?>

</body>
</html>