<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("location:login.php");
  unset($_SESSION['email']);
}
if(isset($_SESSION['status'])){
?>
<script>
alert("<?php echo $_SESSION["name"]?> login successful")
</script>
<?php
unset($_SESSION['status']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="stylepages/main.css">
     <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <title>main</title>
</head>
<body>
<?php include("header.php") ?>
    <div class="menu_head">
        <img src="img/nonveg.png" />
        <h3>Non Veg</h3>
    </div>
    <div class="menu_contener">
    <?php

include 'backend/connection.php';
$selectquery ="select * from menu where content='Non-Veg'";
$query= mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);
while($res =mysqli_fetch_array($query))
{
?>
        <form method="POST" action="backend/manage_cart.php">
<div class="items">
    <div class="image_con">
        <img src="<?php echo $res['img']; ?>"/>
    </div>
    <div class="details">
        <div class="detail">
            <p><?php echo $res['name']; ?></p>
            <h4>₹ <?php echo $res['price']; 
            if($res['content']=='Veg'){
                ?>
                    <i class="fa-solid fa-leaf"></i>
                <?php
            }
            else{
                ?>
                 <i class="fa-solid fa-drumstick-bite"></i>
                <?php
            }
            ?>
            
            </i></h4>
            
        </div>
        <input type="hidden" name="name" value="<?php echo $res['name']; ?>" >
        <input type="hidden" name="price" value="<?php echo $res['price']; ?>" >
        <input type="hidden" name="fid" value="<?php echo $res['id']; ?>" >

        <div class="addbtn">
            <button type="submit" name="addToCart" class="additem">+ADD</button>
        </div>
    </div>
</div>


</form>
        <?php } ?>
    </div>
</body>
</html>