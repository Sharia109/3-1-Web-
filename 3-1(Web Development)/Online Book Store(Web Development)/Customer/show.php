<?php
 
session_start();

echo"<a href='logout.php'>Logout</a>";

?>



<!DOCTYPE html>
<html>
<head>
	<title> Show data</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<br><h1>All the book information</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>bid/th>
         <th>name</th>
         <th>authors</th>
         <th>edition</th>
         <th>status</th>
          <th>quantity</th>
           <th>department</th>
       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","bookss");
       $sql="SELECT * FROM books";
    $records=mysqli_query($con,$sql);
         
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['bid']."</td>";
        echo "<td>".$ques['name']."</td>";
        echo "<td>".$ques['authors']."</td>";
        echo "<td>".$ques['edition']."</td>";
        echo "<td>".$ques['status']."</td>";
        echo "<td>".$ques['quantity']."</td>";
        echo "<td>".$ques['department']."</td>";
        echo "</tr>";
      }
      ?>
     </table>
  </div>

<br><h1>Registered customer data</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>First Name</th>
         <th>Last name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Password</th>
         <th>Contact</th>

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","bookss");
       $sql="SELECT * FROM registration";
    $records=mysqli_query($con,$sql);
        while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['first']."</td>";
        echo "<td>".$ques['last']."</td>";
        echo "<td>".$ques['username']."</td>";
        echo "<td>".$ques['email']."</td>";
        echo "<td>".$ques['password']."</td>";
         echo "<td>".$ques['phone']."</td>";
        echo "</tr>";
      }
      ?>
     </table>
  </div>


<br><h1>Order Details</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>First Name</th>
         <th>Last name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Password</th>
         <th>Contact</th>
          <th>Contact</th>

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","bookss");
       $sql="SELECT * FROM order1";
    $records=mysqli_query($con,$sql);
        while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['id']."</td>";
        echo "<td>".$ques['name']."</td>";
        echo "<td>".$ques['quantity']."</td>";
        echo "<td>".$ques['cust_name']."</td>";
        echo "<td>".$ques['address']."</td>";
         echo "<td>".$ques['mobile']."</td>";
         echo "<td>".$ques['money']."</td>";
        echo "</tr>";
      }
      ?>
     </table>
  </div>




  <br><h1>Feedback from Customers</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Reg_no</th>
    

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","bookss");
       $sql="SELECT * FROM feedback";
    $records=mysqli_query($con,$sql);
        while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['comment']."</td>";
    

        echo "</tr>";
      }
      ?>
     </table>
  </div>



  </body>
</html>