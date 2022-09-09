<?php

session_start();
if(!isset($_SESSION['type'])){
    ?>
        <script>
        //   alert('Login UnSuccessfully');
          window.location.assign('login.html')
        </script>
          <?php
          exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordes</title>
    <link rel="stylesheet" href="stylepages/admin.css">
    <script src="https://kit.fontawesome.com/f1fe65a302.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <style>
.done_icon{
            font-size:20px;
            color: green;
        }

      </style>
</head>
<body>
    <header>
        <div class="header_left">
        <a href="admin.php"> <img src="img/logo2.png"></a>

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
    <h1 class="Heading"><a href="orders.php"><i class="fas fa-arrow-left" style="color:black;font-weight:300px;font-size:30px;  color: rgb(68, 66, 66);margin-right:10px"></i></a>All Orders</h1>

    <div class="table_content" id="marks_table">
        <table class="Marks_entry_table">
          <tr>
            <th>OrderID</th>
            <th>Date</th>
            <th>Name</th>
            <th>A_No</th>
            <th>Food Order</th>
            <th>Time</th>
            <th>Amt</th>
            <th>Method</th>
            <th>Type</th>
            <th>C_Room</th>
            <th>Status</th>
            <th>actions</th>
          </tr>
          <?php

            include 'backend/connection.php';
            $selectquery ="select * from orders order by ord_id Desc";
            $query= mysqli_query($conn,$selectquery);
            $nums=mysqli_num_rows($query);
            while($res =mysqli_fetch_array($query))
            {
            ?>
            <tr>
            <td><?php echo $res['ord_id']; ?></td>
            <td><?php echo $res['date']; ?></td>
            <?php
            $user_id=$res['user_id'];
            $quer2="select * from users where id='$user_id'";
            $exequery=mysqli_query($conn,$quer2);
            $res2=mysqli_fetch_array($exequery);
            ?>
            <td><?php echo $res2['name']; ?></td>
            <td><?php echo $res2['admissionNo']; ?></td>
            <td><?php echo $res['food_name']; ?></td>
            <td><?php echo $res['time']; ?></td>
            <td>₹<?php echo $res['total_amt']; ?></td>
            <td><?php echo $res['paymethod']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <td><?php echo $res['class']; ?></td>
             <?php
             if($res['status']=='Delivery'){
                ?>
                <td style="color:green;"><?php echo $res['status']; ?></td>
                <?php
             }
             else{
                ?>
                <td style="color:red;"><?php echo $res['status']; ?></td>
                <?php

             }
             if($res['status']=='Delivery' or $res['status']=='NotDelivery'){
              ?>
              <td> <i class="fa-solid fa-circle-check done_icon" ></i></td>

              <?php

           }
           else{
              ?>
              <td>
          <a href="backend/editorder.php?sr=<?php echo $res['ord_id']; ?>&status=Delivery" data-toggle="tooltip" data-placement="bootom" title="Deliverd"><input type="submit" value="" style="width:20px;height:20px;" class="edit_btn" name="Delivery"><a>
          <a href="backend/editorder.php?sr=<?php echo $res['ord_id']; ?>&status=NotDelivery" data-toggle="tooltip" data-placement="bootom" title="NotDeliverd"><input type="submit" value="" style="width:20px;height:20px;" class="edit_btn2" name="NotDelivery"></a>
          </td>
          <?php
           }
           ?>
          </tr>

           <?php } ?>
            
        </table>
    </div>
</body>
<script>
  function checklogout(){
    return confirm("Are you sure you want to logout?")
  }
</script>
</html>