<?php  
session_start();
include 'backend/connection.php';
$user_id= $_SESSION["userID"];
$sql="select * from users where id='$user_id' ";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result)){
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylepages/cart.css">
    <link rel="stylesheet" href="stylepages/user.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>User</title>
</head>
<body>
    <header>
        <a href="menu.php"><i class="fa-solid fa-angle-left"></i></a>
        <h3>My Account</h3>
    </header>
    <div class="user_info">
        <div class="uer_icon">
            <img src="img/user.png" class="userimg"> 

        </div>
        <div class="userinfo">
            <h2><?php echo $name; ?></h2>
            <h4><?php echo $email; ?></h4>
            <h4><?php echo $phone; ?></h4>

        </div>
    </div>
    <h2 class="uorder">Your Orders</h2>
    <?php
            $selectquery ="select * from orders where user_id='$user_id';";
            $query= mysqli_query($conn,$selectquery);
            $nums=mysqli_num_rows($query);
            while($res =mysqli_fetch_array($query))
            {
            ?>
                <div class="myorders">
                    <div class="foods">
                        <h3>FOODS:</h3>
                        <h4><?php echo $res['food_name']; ?> </h4>
                    </div>
                    <div class="foods">
                        <h3>DATE:</h3>
                        <h4><?php echo $res['date']; ?> </h4>
                    </div>
                    <div class="totalprice">
                        <h3 style="color: #3AFF71;">TOTAL:</h3>
                        <h3>₹<?php echo $res['total_amt']; ?></h3>
                    </div>
                </div>
    <?php } ?>

    <div class="logout_con">
        <div class="logout_img">
            <img src="img/logout.png">
        </div>
        <div class="logoutbtn">
            <a href="backend/logout.php" onclick="return checklogout()"> <button class="login_btn">Login</button></a>
        </div>

    </div>
    
</body>
<script>
  function checklogout(){
    return confirm("Are you sure you want to logout?")
  }
</script>
</html>