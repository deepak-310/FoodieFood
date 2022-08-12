<?php
 $serevername="localhost:3305";
 $username="root";
 $password="";
 $dbase="foodiefood1";
  
 $conn = mysqli_connect($serevername,$username,$password,$dbase);
 if(!$conn){
    die("connection faild!" . mysqli_connect_error());
 }

 ?>