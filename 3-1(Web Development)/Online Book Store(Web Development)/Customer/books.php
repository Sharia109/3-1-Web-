<?php
include"connection.php"

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Book Store </title>
    <link rel="stylesheet" type="text/css" href="style2.css">
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
  <br><br>
<div style="height: 110px;width:100%; background-color: black;">



	<nav>
		<ul>
		 <li><a href="index.php">HOME</a></li>
		 <li><a href="slide.html">TrendingBooks</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="order.php">Order</a></li>
			<li><a href="home.php">EXIT</a></li>

		</ul>
	</nav>
</div>
</header>



<section>
	<br><br>
	
	<h2 style="color: white;">List of Books</h2>
    <?php
    
   $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");
   echo"<table class='table table-blordered table-hover'>";
   echo"<tr style='background-color:grey;'>";

   //table header
   echo"<th>"; echo "ID"; echo"</th>";
      echo"<th>"; echo "Book-Name"; echo"</th>";
         echo"<th>"; echo "Authors Name"; echo"</th>";
            echo"<th>"; echo "Edition"; echo"</th>";
               echo"<th>"; echo "Status"; echo"</th>";
                  echo"<th>"; echo "Quantity"; echo"</th>";
                   echo"<th>"; echo "Department"; echo"</th>";
                   echo "</tr>";

             while($row=mysqli_fetch_assoc($res))
             {
             	echo"<tr>";
                 echo"<td>"; echo $row['bid']; echo"</td>";
                 echo"<td>"; echo $row['name']; echo"</td>";
                 echo"<td>"; echo $row['authors']; echo"</td>";
                 echo"<td>"; echo $row['edition']; echo"</td>";
                 echo"<td>"; echo $row['status']; echo"</td>";
                 echo"<td>"; echo $row['quantity']; echo"</td>";
                 echo"<td>"; echo $row['department']; echo"</td>";

             	echo"</tr>";
             } 
             echo "</table>";     

    ?>

</section>

<footer>
	<p style="color: white; text-align: center;">
		<br>
		Email: wasikaaditi@gmail.com <br><br>
		Mobile: 123456789<br>

	</p>
</footer>




	
</div>
</body>
</html>