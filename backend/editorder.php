<?php

$id= $_GET['sr'];
$status=$_GET['status'];
include 'connection.php';

$query="update orders set status='$status' where ord_id='$id'";
$res =mysqli_query($conn,$query);

              if($res){
                ?>
                <script>
                  alert('Food Deleverd  Successfully');
                  window.location.assign('../orders.php')
                </script>
                  <?php
              }else{
                ?>
                <script>
                alert('Status Is Not Updated');
                window.location.assign('../orders.php')
                </script>
                <?php
              }


?>