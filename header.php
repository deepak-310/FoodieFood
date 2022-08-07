<?php

if(!isset($_SESSION["email"]))
{
  header("location:login.html");
  unset($_SESSION['email']);
}
$count=0;
if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a href="cart.php">
        <div class="cart">
            <i class="fa-solid fa-bag-shopping"></i>
            
           <div class="count">
            <h3><?php echo $count; ?></h3>
           </div>
        </div>
    </a>
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

</body>
</html>