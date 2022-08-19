<?php
include "connection.php";

$fname=$_POST['f_name'];
$img=$_POST['img'];
$price=$_POST['price'];
$dec=$_POST['dec'];
$type=$_POST['type'];
$content=$_POST['content'];

$query="insert into menu values(NULL,'$fname','$img','$price','$dec','$type','$content')";
if (mysqli_query($conn, $query)) {
    ?>
    <script>
      alert('Food Inserted Into Menu Successfully');
      window.location.assign('../menus.php')
    </script>
      <?php
  
   
  } 
  else { 
    ?>
    
    <script>
      alert(' Error: something went wrong');
      window.location.assign('../menus.php')
    </script>
      <?php
  }



?>