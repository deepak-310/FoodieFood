<?php
include "connection.php";

$id=$_POST['id'];
$fname=$_POST['f_name'];
$img=$_POST['img'];
$price=$_POST['price'];
$dec=$_POST['dec'];
$type=$_POST['type'];
$content=$_POST['content'];

$query="update menu set name='$fname',img='$img',price='$price',description='$dec',type='$type',content='$content' where id='$id'";
if (mysqli_query($conn, $query)) {
    ?>
    <script>
      alert('Food Updated Into Menu Successfully');
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