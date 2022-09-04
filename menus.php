<?php
session_start();

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
        .edit_btn{
    border: none;
    background-color: #1C3EF1;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  .delet_btn{
    border: none;
    background-color: #F11C1C;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  .f_img{
    width:90px;
    height:70px;
  }
  .add_food{
    width:180px;
    height:55px;
    background-color:#3AFF71;
    color:#ffffff;
    border:none;
    margin-left:45%;
    margin-bottom:20px;
    border-radius:30px;
    font-size:20px;
    
  }


</style>
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
    <h1 class="Heading">Menus</h1>

    <a href="addmenu.php"><button class="add_food"> Add Food </button></a>

    <div class="table_content" id="marks_table">
        <table class="Marks_entry_table">
          <tr>
            <th>ID</th>
            <th>Food</th>
            <th>Food Name</th>
            <th>Price</th>
            <th>description</th>
            <th>Type</th>
            <th>Content</th>
            <th>Actions</th>
          </tr>
          <?php

            include 'backend/connection.php';
            $selectquery ="select * from menu ";
            $query= mysqli_query($conn,$selectquery);
            $nums=mysqli_num_rows($query);
            $sr=1;
            while($res =mysqli_fetch_array($query))
            {
            ?>
            <tr>
            <td><?php echo $sr; ?></td>
            <td><img class="f_img" src="<?php echo $res['img']; ?>" ></td>
            <td><?php echo $res['name']; ?></td>
            <td>₹<?php echo $res['price']; ?></td>
            <td><?php echo $res['description']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <td><?php echo $res['content']; ?></td>
            <td>
            <a href="editmenu.php?sr=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bootom" title="EDIT"><button class="edit_btn"><i class="fa-solid fa-pen"></i></button></a>
            <a href="backend/deletefood.php?sr=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bootom" onclick="return checkdelete()"  title="DELETE"><button class="delet_btn"><i class="fa-solid fa-trash"></i></button></a>
            </td>
          </tr>

           <?php
            $sr+=1;
            } ?>
            
        </table>
    </div>
</body>
<script>
   function checklogout(){
    return confirm("Are you sure you want to logout?")
  }
  function checkdelete(){
    return confirm("Are you sure you want to Delete this FoodMenu?")
  }
</script>
</html>