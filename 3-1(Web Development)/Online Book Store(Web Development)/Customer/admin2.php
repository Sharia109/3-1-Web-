<?php


$myemail="aditi@gmail.com";
$mypass="aditi";


if(isset($_POST['login']))
{
 $email=$_POST['email'];
 $pass=$_POST['password'];

 
 if($email==$myemail && $pass==$mypass)
{
 
  if(isset($_POST['remember']))
  {setcookie('email',$email,time()+60*60*7);

  setcookie('pass',$pass,time()+60*60*7);
  }

  session_start();
   $_SESSION['email']=$email;

   header("location:show.php");

}
else
{
	echo"Email or password is invalid.<br> Click here to <a href='admin.php'> try again</a>";
}

}

else
{
	header("location:admin.php");
}

?>