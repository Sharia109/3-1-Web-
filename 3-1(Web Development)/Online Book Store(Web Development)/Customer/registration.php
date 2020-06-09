<?php
 
include"connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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

<header>


	<nav>
		<ul>
		 <li><a href="index.php">HOME</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="">FEEDBACK</a></li>
			<li><a href="login.php">LOGIN</a></li>
			 <li><a href="login.php">LOGOUT</a></li>
			<li><a href="registration.php">SignUp</a></li>

			
		</ul>
	</nav>

</header>

<section>
	<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Online Book Store</h1>
	<h1 style="text-align: center;font-size:25px; ">User Registration Form</h1><br>
    <form name="Registration" action="" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
    		<input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
    	    <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
    	    <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
    	    <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
    	    <input class="form-control" type="text" name="phone" placeholder="Phone No" required=""><br>
    		<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>
</section>

<?php


  if(isset($_POST['submit']))
 {

$count=0;
$sql="select username from registration";
$res=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($res))
{

if($row['username']==$_POST['username'])

{
	$count=$count+1;
}

}

if($count==0)


{mysqli_query($db,"INSERT INTO `registration` VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[phone]') ;");


  

?>

 <script type="text/javascript">
 	
alert("Registration Successful");

 </script>
<?php

}

else
{

?>

 <script type="text/javascript">
 	
alert("The username already exists");

 </script>
<?php
}

}
?>



</body>
</html>