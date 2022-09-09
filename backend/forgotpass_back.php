<?php
include 'connection.php';
$email=$_POST['emailid'];
$phone=$_POST['phoneno'];
$pass=$_POST['password'];
$cpass=$_POST['cpass'];


if($pass==$cpass){

    $query="update users set password=md5('$pass') where email='$email' and phone='$phone';";
    
    if (mysqli_query($conn, $query)) {
        ?>
        <script>
          alert('Your Password Updated Succesfully');
          window.location.assign('../login.html')
        </script>
          <?php
      } else {
        ?>
        <script>
          alert(' Error: something went wrong');
          window.location.assign('../login.html')
        </script>
          <?php
      }
}
mysqli_close($conn);
?>