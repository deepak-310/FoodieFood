<?php
include 'connection.php';
$id= $_GET['sr'];
$deletequery = "DELETE FROM users WHERE id='$id'";
$query = mysqli_query($conn,$deletequery);
if($query){
  $query2="delete from orders where user_id='$id'";
  mysqli_query($conn,$query2);
    ?>
    <script>
      alert('User Deleted Successfully');
      window.location.assign('../customers.php')
    </script>
      <?php
}
else{
    ?>
    <script>
      alert('Error! Somthing Went Wrong');
      window.location.assign('../customers.php')
    </script>
      <?php
}



?>