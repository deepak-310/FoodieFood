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
    <title>main</title>
</head>
<body>
    <header>
        <div class="logo_con">
            <img src="img/logo2.png"/>
        </div>
        <div class="search_con">
            <input type="search" placeholder="search your favorite dish">
         
            <i class="fa-solid fa-magnifying-glass search_logo"></i>
        </div>
        <div class="cart">
            <i class="fa-solid fa-bag-shopping"></i>
           <div class="count">
            <h3>1</h3>
           </div>
        </div>
    </header>
    <div class="Categories">
        <h1>Categories</h1>
        <div class="categorie_con">
            <a href="menu.php" class="categorie">
                <div class="cat_con">
                    <img src="img/brakfast2.png"/>
                </div>
                <h3>Breakfast</h3> 
            </a>
            <a href="veg.php" class="categorie">
             
                <div class="cat_con" style="background-color: #FFD3CD;">
                    <img src="img/veg.png"/>
                </div>
                <h3>Veg</h3>
             
            </a>      
             <a href="nonveg.php" class="categorie">
                <div class="cat_con"style="background-color: #FFF2B2;" >
                    <img src="img/nonveg.png"/>
                </div>
                <h3>Non-Veg</h3>
            </a> 
             <a href="south.php" class="categorie">
                <div class="cat_con" style="background-color: #BFFDD9;">
                    <img src="img/south.png"/>
                </div>
                <h3>South</h3>
            </a>  
             <a href="drink.php" class="categorie">
                <div class="cat_con" style="background-color: #D8F3FF;">
                    <img src="img/drinks.png"/>
                </div>
                <h3>Drinks</h3>
            </a>    
        </div>
    </div>

    <div class="menu_head">
        <img src="img/drinks.png" />
        <h3>Drinks/Beverge</h3>
    </div>
    <div class="menu_contener">
    <?php

include 'backend/connection.php';
$selectquery ="select * from menu where type='Drinks'";
$query= mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);
while($res =mysqli_fetch_array($query))
{
?>
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
                <div class="addbtn">
                    <button class="additem">+ADD</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>