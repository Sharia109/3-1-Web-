<?php
include"connection.php"

?>

<!DOCTYPE html>
<html>
<head>
  <title>Online Book Store </title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</head>
<body>
<div class="wrapper">

<header>




  <nav>
    <ul>
     <li><a href="index.php">HOME</a></li>
      <li><a href="home.php">EXIT</a></li>

    </ul>
  </nav>
</header>


<section>
  <div class="reg_img">
<div class="box2">
  <h3 style="text-align: center; font-size: 35px; font-family: Lucida Console;"> Write your comments below</h3>
  <form style="" action="" method="post">
    <input class="form-control" type="text" name="comment" placeholder="Do you have any suggestions for us?" style="height: 65px;">
    <br>
     <input class="btn btn-default" type="submit" name="submit" value="Comment" style="height: 30px; width: 100px; background-color: pink;">

    
    </form>

</div>
    
  </div>
</section>

<?php


  if(isset($_POST['submit']))
 {

mysqli_query($db,"INSERT INTO `feedback` VALUES ('$_POST[comment]') ;");



?>

 <script type="text/javascript">
  
alert("Thanks for feedback");

 </script>
<?php


}
?>
</body>
</html>