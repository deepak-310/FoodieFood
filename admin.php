<?php
session_start();
if(!isset($_SESSION['type'])){
    ?>
        <script>
          alert('Login UnSuccessfully');
          window.location.assign('login.html')
        </script>
          <?php
          exit();
}
if(isset($_SESSION['status'])){
    ?>
    <script>
    alert("<?php echo $_SESSION["name"]?> login successful")
    </script>
    <?php
    unset($_SESSION['status']);
    }

include 'backend/connection.php';


$qury1="select * from menu";
$qury2="select * from users";
$qury3= "select * from orders";
$qury4="SELECT SUM(total_amt) As sum from orders";

$total_m = mysqli_query($conn,$qury1);
$total_menu=mysqli_num_rows($total_m);


$total_u = mysqli_query($conn,$qury2);
$total_users=mysqli_num_rows($total_u);


$total_o = mysqli_query($conn,$qury3);
$total_order=mysqli_num_rows($total_o);

$total_r=mysqli_query($conn,$qury4);

while($row=mysqli_fetch_assoc($total_r)){
    $total_revenu =$row['sum'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="stylepages/admin.css">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header_left">
            <img src="img/logo2.png">

        </div>
        <div class="header_right">
            <div class="links">
                <a href="admin.php" ><i class="fa-solid fa-house"></i>Home</a>
                <a href="backend/logout.php" onclick="return checklogout()" > <i class="fa-solid fa-right-from-bracket"></i>LogOut</a>
            </div>
            <div class="admininfo">
                <div class="admin_img">
                    <img src="img/adminlogo.png">

                </div>
                <div class="admin_detail">
                    <h3><?php echo $_SESSION['name']; ?></h3>
                    <h4>Admin</h4>
                </div>
            </div>

        </div>
    </header>
    <div class="dashbord_cont">
        <div class="message">
            <h3>Dashboard</h3>
            <h4>Welcome to FooDieFood Admin!</h4>
        </div>
        
        <div class="dash_funtions_cont">
            <div class="row1">
                <a href="#" >
                    <div class="option">
                        <div class="left_op">
                            <h2><?php echo $total_menu; ?></h2>
                            <h3>Total Menus</h3>
                        </div>
                        <div class="right_op">
                            <div class="img_op">
                                <img class="img_op1" src="img/menufood.png" >
                            </div>
        
                        </div>
                    </div>

                </a>
                <a href="#">
                    
                <div class="option">
                    <div class="left_op">
                        <h2>₹<?php echo $total_revenu ?></h2>
                        <h3>Total Revenue</h3>
                    </div>
                    <div class="right_op">
                        <div class="img_op" >
                            <img class="img_op2" src="img/revenulogo.png"  >
                        </div>
    
                    </div>
                </div>

                </a>
                
            </div>
            <div class="row2">
                
                <a href="orders.php">
                    <div class="option">
                        <div class="left_op">
                            <h2><?php echo $total_order; ?></h2>
                            <h3>Total Ordes</h3>
                        </div>
                        <div class="right_op">
                            <div class="img_op">
                                <img class="img_op3" src="img/orderslogo.png" >
                            </div>
        
                        </div>
                    </div>
                    
                </a>
           
             <a href="#">
                <div class="option">
                    <div class="left_op">
                        <h2><?php echo $total_users; ?></h2>
                        <h3>Total Customers</h3>
                    </div>
                    <div class="right_op">
                        <div class="img_op">
                            <img class="img_op4" src="img/customer.png" >
                        </div>
    
                    </div>
                </div>
                    
                </a>
            


            </div>
          


        </div>
    </div>
    
</body>

<script>
  function checklogout(){
    return confirm("Are you sure you want to logout?")
  }
</script>
</html>