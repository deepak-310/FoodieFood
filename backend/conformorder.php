<?php
session_start();
include 'connection.php';
$useid=$_SESSION['userID'];
$Gtotal=0;
$food_name=" ";
foreach($_SESSION['cart'] as $key => $value){
    $total=$value['price']*$value['qnt'];
    $Gtotal=$Gtotal+$total;
    $food_name= $food_name. "$value[name]"."( $value[qnt])  ";   
}
$time=$_POST['otime'];
$divmethod=$_POST['method'];
$paymethod=$_POST['paym'];
$date=date('Y-m-d');
if($divmethod=="delivery"){
    $classroom=$_POST['classroom'];
    $query="INSERT INTO orders values(NULL,'$useid','$food_name','$Gtotal','$divmethod','$paymethod','$time','$classroom','$date');";
    if(mysqli_query($conn,$query)){
        unset($_SESSION['cart']);
        ?>
    <script>
        
      alert('Order Confiremed Sussesfully');
      window.location.assign('../menu.php');
    </script>
      <?php
    }  
}
elseif($divmethod=="pickup"){
    $query="INSERT INTO orders values(NULL,'$useid','$food_name','$Gtotal','$divmethod','$paymethod','$time','Null','$date');";
    if(mysqli_query($conn,$query)){
        unset($_SESSION['cart']);
        ?>
    <script>
      alert('Order Confiremed Sussesfully Pick up Timing is <?php $time ?>');
      window.location.assign('../menu.php');
    </script>
      <?php
    }  

}






?>