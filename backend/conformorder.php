<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("location:login.html");
  unset($_SESSION['email']);
}
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
$status="Proccessing";
date_default_timezone_set('Asia/Kolkata');
$Otime=date('H:i:s');

  if($paymethod=="COD"){
      if($divmethod=="delivery"){
          $classroom=$_POST['classroom'];
          $query="INSERT INTO orders values(NULL,'$useid','$food_name','$Gtotal','$divmethod','$paymethod','$time','$classroom','$date','$Otime','$status');";
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
          $query="INSERT INTO orders values(NULL,'$useid','$food_name','$Gtotal','$divmethod','$paymethod','$time','-','$date','$Otime','$status');";
          if(mysqli_query($conn,$query)){
              unset($_SESSION['cart']);
              ?>
          <script>
            alert('Order Confiremed Sussesfully ');
            window.location.assign('../menu.php');
          </script>
            <?php
          }  

      }
    }
    else{  
      $apikey="rzp_test_vemKmDAjYprq8Z";
      $user_id=$_SESSION['userID'];
      $quer2="select * from users where id='$user_id'";
      $exequery=mysqli_query($conn,$quer2);
      $res2=mysqli_fetch_array($exequery);

      ?>
      <button id="rzp-button1">Pay</button>

      <form action="cart.php" method="post">
          <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
          <script>
          var options = {
              "key": "<?php echo $apikey; ?>", // Enter the Key ID generated from the Dashboard
              "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
              "currency": "INR",
              "name": "FoodieFood",
              "description": "Test Transaction",
              "image": "https://example.com/your_logo",
              // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
              "handler": function (response){
                  alert(response.razorpay_payment_id);
                  alert(response.razorpay_order_id);
                  alert(response.razorpay_signature)
              },
              "prefill": {
                  "name": "<?php echo $res2['name']; ?>",
                  "email": "<?php echo $res2['email']; ?>",
                  "contact": "91<?php echo $res2['phone']; ?>"
              },
              "notes": {
                  "address": "Razorpay Corporate Office"
              },
              "theme": {
                  "color": "#3399cc"
              }
          };
          var rzp1 = new Razorpay(options);
          rzp1.on('payment.failed', function (response){
                  alert(response.error.code);
                  alert(response.error.description);
                  alert(response.error.source);
                  alert(response.error.step);
                  alert(response.error.reason);
                  alert(response.error.metadata.order_id);
                  alert(response.error.metadata.payment_id);
          });
          document.getElementById('rzp-button1').onclick = function(e){
              rzp1.open();
              e.preventDefault();
          }
        </script>

        </form>


<?php


    }






?>