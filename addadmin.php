<?php
session_start();
if(!isset($_SESSION['type'])){
  ?>
      <script>
        // alert('Login UnSuccessfully');
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
.gender{
    display: flex;
    align-items: center;
    margin-top:5px;
 
}
.gender input{
   padding: 5px;
    font-size: 10px;
    width: 20px;
    height: 20px;
}
.gen label , .gen1 label{
    margin-left:10px;
}
.gen{
    display: flex;
}
.gen1{
    display: flex;
    margin-left:20px;
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
        <h1 class="heading"><a href="admin.php"><i class="fas fa-arrow-left" style="color:black;font-weight:300px;font-size:30px;  color: rgb(68, 66, 66);margin-right:10px"></i></a>Add Admin</h1>
        <div class="addbranch" style="display: flex;align-items: center;justify-content: center;" >
        <div class="border">

        <form action="backend/addadminbackend.php" method="post">
          <div class="add_branch_contaner" style="box-shadow:none; ">
            <div class="ele">
                <label for="Name">Name</label><br>
                <input type="text" name="uname" required >
            </div>
            <div class="ele">
              <label>Email ID</label><br>
              <input type="email" name="email" required><br>
          </div>
          <div class="ele">
              <label>Phone No</label><br>
              <input type="number" name="phone"><br>
          </div>
          <div class="ele">
              <label>Password</label><br>
              <input type="password" name="pass" required><br>
          </div>
          <div class="ele">
          <label class="lable2">Gender</label>
            <div class="gender">
                <div class="gen">
                <input type="radio" name="gender"  value="male">
                <label for="male">Male</label>
                </div>
                <div class="gen1">
                <input type="radio" name="gender"  id="female" value="female">
                <label for="female">Female</label>
                </div>
               
           
            </div>
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
<script>
  function checklogout(){
    return confirm("Are you sure you want to logout?")
  }
  function checkdelete(){
    return confirm("Are you sure you want to Delete this user?")
  }
</script>

</html>