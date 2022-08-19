<?php
include 'connection.php';
$id= $_GET['sr'];
$deletequery = "DELETE FROM menu WHERE id='$id'";
$query = mysqli_query($conn,$deletequery);
if($query){
    ?>
    <script>
      alert('Food Delete From Menu Successfully');
      window.location.assign('../menus.php')
    </script>
      <?php
}
else{
    ?>
    <script>
      alert('Error Food Can not be Delete');
      window.location.assign('../menus.php')
    </script>
      <?php
}



?>