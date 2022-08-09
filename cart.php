<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
    <title>My Orders</title>
    <link rel="stylesheet" href="stylepages/cart.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="menu.php"><i class="fa-solid fa-angle-left"></i></a>
            <h3>Cart</h3>
    </header>
    
    <?php
    $Gtotal=0;
    $total=0;
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
        ?><h1 class="head">Orders</h1>
        <?php
    foreach($_SESSION['cart'] as $key => $value){
        $Gtotal=$Gtotal+$value['price'];
        $total=$value['price']*$value['qnt'];
        ?>
        
<div class="cart_con">
        <div class="cart_item">
            <div class="item_left">
                <h3><?php echo"$value[name]" ?></h3>
                <h4>₹ <?php  echo"$value[price]" ?></h4>
                <input type="hidden" class="fprice" value="<?php  echo"$value[price]" ?>" >
            </div>
            <div class="item_right">
                <div class="remove_div">
                <form action="backend/manage_cart.php" method="post">
                    <button class="delet_btn" name="removefood"><i class="fas fa-trash-alt"></i></button>
                    <input type="hidden" name="foodname" value="<?php echo"$value[name]" ?>">
                    </form>
                </div>
                <div class="item_actons">
                    <form action="backend/manage_cart.php" method="post">
                       <input id="fqnt" name="modqnt" class="itemcount" onchange="this.form.submit()" type="number" value="<?php echo"$value[qnt]" ?>" min=1 max=10>
                       <input type="hidden" name="foodname" value="<?php echo"$value[name]" ?>">                   
                    </form>
                </div>
                <div class="item_total">
                    <h3>₹</h3>
                <h3 class="ftotal"></h3>
                </div>

            </div>
        </div>
    </div>
    <?php

}
?>

<h1 class="head">Delivery method.</h1>
   
        <form method="post" action="payment.php">
            <div class="dev_methods">
                <div class="delivery">
                    <input type="radio" id="delivery" name="method" value="delivery" required="required">
                    <label for="delivery">Class delivery</label>
                </div>
                <hr>
                <div class="pickup">
                    <input type="radio" id="pickup" name="method" value="pickup" required="required">
                    <label for="pickup">Pick Up</label>
                </div>
            </div>
            <h1 class="head">Payment method.</h1>
            <div class="pay_methods">
                
                <div class="razer_pay">
                    <input type="radio" id="razorpay" name="paym" value="razorpay" required="required">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/razorpay-icon.svg" class="razorimg">
                </div>
                <div class="COD">
                    <input type="radio" id="cod" name="paym" value="COD" required="required">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/banking-finance/payment-icon.svg" class="codimg">
                    <h4>Cash</h4> 
                </div>
            </div>
        <div class="total_sumamry">
        <div><h3>Total</h3></div>
        <div style="display: flex;"><h3>₹</h3><h3 id="gtotal"></h3></div>
    </div>
    <div class="proceed_con">
        <button class="proccedbtn" type="submit">Proceed to payment</button>
    </div>
        </form>
   
    

<?php


}
else{
    ?>
    <div class="empty_cart">
        <img src="img/ecart.png">
        <h1>Cart Is Empty</h1>
        <p>Hit the green button down<br>
            below to Create an order</p>
            <div class="btn_contener">
                <a href="menu.php" >Start Ordering</a>
            </div>
        
    </div>

<?php


    
}

?>
    
    
    <script>
var gt=0;
var price=document.getElementsByClassName('fprice');
var qnt=document.getElementsByClassName('itemcount');
var total=document.getElementsByClassName('ftotal');
var gtotal=document.getElementById('gtotal');


function subTotal()
{
    gt=0;
    for( let i = 0; i < price.length; i++)
    {
        total[i].innerText=(price[i].value)*(qnt[i].value);
     
        gt=gt+(price[i].value)*(qnt[i].value);

    }
    gtotal.innerText=gt;
}
subTotal();



 </script>
</body>
</html>