<?php
include "connection.php";
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$gen=$_POST['gender'];
$type='Admin';


$query="insert into users values(NULL,'$name','$email','$phone','-',md5('$pass'),'$gen','$type')";
$query2="select * from users where email='$email'";
$result=mysqli_query($conn,$query2);
$present=mysqli_num_rows($result);
if($present>0){
    ?>
    <script>
      alert('User Already Exist');
      window.location.assign('../customers.php')
    </script>
      <?php

}
else{
        if (mysqli_query($conn, $query)) {
            ?>
            <script>
            alert('Admin Added Successfully');
            window.location.assign('../customers.php')
            </script>
            <?php
        
        
        } 
        else { 
            ?>
            
            <script>
            alert(' Error: something went wrong');
            window.location.assign('../addadmin.php')
            </script>
            <?php
        }
}

?>