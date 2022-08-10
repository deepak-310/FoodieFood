<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("location:login.html");
  unset($_SESSION['email']);
}
$divmethod=$_POST['method'];
$paymethod=$_POST['paym'];
$Gtotal=0;
$food_name=" ";
foreach($_SESSION['cart'] as $key => $value){
    $total=$value['price']*$value['qnt'];
    $Gtotal=$Gtotal+$total;
    $food_name= $food_name. "$value[name]"."( $value[qnt]) <br>";   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="stylepages/cart.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="cart.php"><i class="fa-solid fa-angle-left"></i></a>
        <h3>Check Out</h3>
    </header>
    <h1 class="head">Payment</h1>
    <form method="post" action="backend/conformorder.php">
    <div class="option_con">
        <?php  
        if($divmethod=='delivery'){
            ?>
        <h3>Class Room</h3>
        <div class="input_con">
            <label >Enter Classroom No</label>
            <input type="text" required="required" name="classroom" placeholder="eg. O101">
        </div>
            <?php
        }
        ?>
        
        <h3 class="entry_head">Time Of Pickup/Delivery</h3>
        <div class="input_con">
            <label >Enter Time</label>
            <input type="text" required="required" name="otime" placeholder="eg. 10AM">
        </div>
    </div>
    <div class="ptotal_sumamry">
        <h3>Total</h3>
        <h3>₹ <?php echo $Gtotal;  ?></h3>
    </div>
    <input type="hidden" value="<?php echo $divmethod?>" name="method">
    <input type="hidden" value="<?php echo $paymethod?>" name="paym">

    <div class="pay_proceed_con">
            <?php
            if($paymethod=="COD"){
                ?>
                       
                <button class="proccedbtn"  type="submit">
                   Confirm Order
                </button>
                <?php
            }
            else{
                ?>

                <button class="proccedbtn" type="submit" onclick="return checklogout()">
                    Proceed to payment
                </button>
                <?php
            }


            ?>


    </div>
        </form>

</body>
<script>
  function checklogout(){
    return confirm("Are you Want to confirm Your Order?")
  }
</script>
</html>