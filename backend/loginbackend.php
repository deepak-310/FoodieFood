<?php
session_start();
include 'connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="select * from users where email='".$email."' AND password=md5('".$password."') ";
    $result=mysqli_query($conn,$sql);
    
    if($row=mysqli_fetch_array($result))
    {
        $_SESSION["name"]=$row['name'];
        $_SESSION["userID"]=$row['id'];
        $type=$row['type'];
        $_SESSION["email"]=$email;
        $email=$_SESSION['email'];
        $_SESSION['status']="login";
        if($type=='Admin'){
          $_SESSION['type']=$row['type'];
          header("location:../admin.php");
        }
        else{
          header("location:../menu.php");

        }
        
    }

    else{
        ?>
        <script>
          alert('Login  UnSuccessfully');
          window.location.assign('../login.html')
        </script>
          <?php
    }
    ?>
<script>
  alert('Email or password is incorrect');  
</script>
<?php
}

?>