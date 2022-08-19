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

    <style>

.heading{
    margin: 30px 80px;
    font-weight: 500;
    font-size: 30px;
    color: black;

}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.add_branch_contaner{
  
  width: 600px;
  max-width: 100%;
  padding: 10px 30px 20px;
  
}
.add_branch_contaner h1{
  margin: 0;
  margin-bottom: 20px;
 
  
}


.add_branch_contaner input,select{
  width: 100%;
  height: 30px;
  margin-bottom: 20px;
  
}
.button_class{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 20px;
}
.button_class input{
  width: 250px;
  height: 40px;
  padding: 5px;
  border: none;
  color: white;
  background-color: gray;
  border-radius: 5px;
  cursor: pointer;
}
input{
  padding:5px;
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

        <!-- add button -->
        <h1 class="heading"><a href="menus.php"><i class="fas fa-arrow-left" style="color:black;font-weight:300px;font-size:30px;  color: rgb(68, 66, 66);margin-right:10px"></i></a>Add Food</h1>
        <div class="addbranch" style="display: flex;align-items: center;justify-content: center;" >
        <div class="border">

        <form action="backend/addmenubackend.php" method="post">
          <div class="add_branch_contaner" style="box-shadow:none; ">
            <div class="ele">
                <label for="Name"> Food Name</label><br>
                <input type="text" name="f_name" required >
            </div>
            <div class="ele">
              <label>Image Link</label><br>
              <input type="text" name="img" required><br>
          </div>
          <div class="ele">
              <label>Price</label><br>
              <input type="text" name="price"><br>
          </div>
          <div class="ele">
              <label>Description</label><br>
              <input type="text" name="dec" required><br>
          </div>
          <div class="ele">
            <label>Type</label><br>
            <select style="width : 100%;height: 35px; padding: 5px;" name="type" required>
              <option selected>Breakfast</option>
              <option>Drinks</option>
              <option>South</option>
              <option>Veg</option>
              <option>Non-Veg</option>
            </select>
          </div>
          <div class="ele">
            <label>Content</label><br>
            <select style="width: 100%;height: 35px; padding: 5px;" name="content" required>
              <option selected>Veg</option>
              <option>Non-veg</option>
            </select>
          </div>
  
        <div class="button_class">
         <input type="submit" value="ADD" style="background-color: #3AFF71;">
         <input type="reset" value="Reset">
       </div>
        </div>
    </form>
        </div>
        </div>
      

</body>

</html>