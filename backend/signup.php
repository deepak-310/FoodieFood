<?php
include 'connection.php';
$name=$_POST['name'];
$email = $_POST['emailid'];
$phone =$_POST['phoneno'];
$adno = $_POST['admission_no'];
$password =$_POST['password'];
$gender=$_POST['gender'];
$type='Customer';

$query = "INSERT into users values(NULL,'$name','$email','$phone','$adno',md5('$password'),'$gender','$type')";
$query2="select * from users where email='$email'";
$result=mysqli_query($conn,$query2);
$present=mysqli_num_rows($result);
if($present>0){
    ?>
    <script>
      alert('User Already Exist');
      window.location.assign('../login.html')
    </script>
      <?php

}
elseif(strpos($email,'student') == false){
    ?>
    <script>
      alert('You Can Only Use MES ID For SingUp ');
      window.location.assign('../signup.html')
    </script>
      <?php

}
else{
if (mysqli_query($conn, $query)) {
    ?>
    <script>
      alert('<?php $name ?> Your SignUp is succeful');
      window.location.assign('../login.html')
    </script>
      <?php
  } else {
    ?>
    <script>
      alert(' Error: something went wrong');
      window.location.assign('../signup.html')
    </script>
      <?php
  }

}
mysqli_close($conn);
?>