<?php
 
include"connection.php";

?>


<!DOCTYPE html>
<html>
<head>
  <title>Order</title>
  <link rel="stylesheet" type="text/css" href="order.css">
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
    
     <li><a href="home.php">EXIT</a></li>

      
    </ul>
  </nav>

</header>

<section>
  <div class="reg_img">
<div class="box2">
  <h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Place your order below</h1>
 
    <form name="Registration" action="" method="post">
      <div class="login">
        <input class="form-control" type="text" name="id" placeholder="Book id" required=""> <br>
        <input class="form-control" type="text" name="name" placeholder="Book Name" required=""> <br>
          <input class="form-control" type="text" name="quantity" placeholder="Quantity" required=""> <br>
          <input class="form-control" type="text" name="cust_name" placeholder="Enter customer name" required=""><br>
          <input class="form-control" type="text" name="address" placeholder="Address" required=""> <br>
          <input class="form-control" type="text" name="mobile" placeholder="Contact No" required=""><br>
           <input class="form-control" type="text" name="money" placeholder="Money Paying Method" required=""><br>
        <input class="btn btn-default" type="submit" name="submit" value="Confirm Order" style="color:black; width: 150px; height: 30px; background-color: brown">
      
    </div>
    </form>

</div>
    
  </div>
</section>

<?php


  if(isset($_POST['submit']))
 {

mysqli_query($db,"INSERT INTO `order` VALUES ('$_POST[id]','$_POST[name]','$_POST[quantity]','$_POST[cust_name]','$_POST[address]','$_POST[mobile]','$_POST[money]') ;");



?>

 <script type="text/javascript">
  
alert("Order Successful");

 </script>
<?php


}
?>



</body>
</html>