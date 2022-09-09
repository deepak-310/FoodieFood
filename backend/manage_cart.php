<?php
session_start();
$page=$_GET['page'];

if($page=='nonveg'){

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['cart'])){
            $myfood=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myfood)){
              
                ?>
        <script>
          alert('This Item Is Already Present In You Cart');
          window.location.assign('../nonveg.php')
        </script>
          <?php
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../nonveg.php')
            </script>
              <?php
        }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../nonveg.php')
            </script>
              <?php
        }
    }
    if(isset($_POST['removefood'])){
      foreach($_SESSION['cart'] as $key => $value){ 
        if($value['name']==$_POST['foodname']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          ?>
          <script>
            // alert('Food Is Removed From Cart');
            window.location.assign('../cart.php')
          </script>
            <?php
        }
      }
      
    }
    if(isset($_POST['modqnt'])){
      foreach($_SESSION['cart'] as $key => $value){ 
         if($value['name']==$_POST['foodname']){
          $_SESSION['cart'][$key]['qnt']=$_POST['modqnt'];
           ?>
           <script>
             window.location.assign('../cart.php')
           </script>
             <?php
         }
       }

    }
    }

}
elseif($page=='veg'){
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['cart'])){
            $myfood=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myfood)){
              
                ?>
        <script>
          alert('This Item Is Already Present In You Cart');
          window.location.assign('../veg.php')
        </script>
          <?php
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../veg.php')
            </script>
              <?php
        }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../veg.php')
            </script>
              <?php
        }
    }
    if(isset($_POST['removefood'])){
      foreach($_SESSION['cart'] as $key => $value){ 
        if($value['name']==$_POST['foodname']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          ?>
          <script>
            // alert('Food Is Removed From Cart');
            window.location.assign('../cart.php')
          </script>
            <?php
        }
      }
      
    }
    if(isset($_POST['modqnt'])){
      foreach($_SESSION['cart'] as $key => $value){ 
         if($value['name']==$_POST['foodname']){
          $_SESSION['cart'][$key]['qnt']=$_POST['modqnt'];
           ?>
           <script>
             window.location.assign('../cart.php')
           </script>
             <?php
         }
       }

    }
    }

}
elseif($page=='south'){
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['cart'])){
            $myfood=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myfood)){
              
                ?>
        <script>
          alert('This Item Is Already Present In You Cart');
          window.location.assign('../south.php')
        </script>
          <?php
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../south.php')
            </script>
              <?php
        }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../south.php')
            </script>
              <?php
        }
    }
    if(isset($_POST['removefood'])){
      foreach($_SESSION['cart'] as $key => $value){ 
        if($value['name']==$_POST['foodname']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          ?>
          <script>
            // alert('Food Is Removed From Cart');
            window.location.assign('../cart.php')
          </script>
            <?php
        }
      }
      
    }
    if(isset($_POST['modqnt'])){
      foreach($_SESSION['cart'] as $key => $value){ 
         if($value['name']==$_POST['foodname']){
          $_SESSION['cart'][$key]['qnt']=$_POST['modqnt'];
           ?>
           <script>
             window.location.assign('../cart.php')
           </script>
             <?php
         }
       }

    }
    }
}
elseif($page=='drink'){
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['cart'])){
            $myfood=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myfood)){
              
                ?>
        <script>
          alert('This Item Is Already Present In You Cart');
          window.location.assign('../drink.php')
        </script>
          <?php
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../drink.php')
            </script>
              <?php
        }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../drink.php')
            </script>
              <?php
        }
    }
    if(isset($_POST['removefood'])){
      foreach($_SESSION['cart'] as $key => $value){ 
        if($value['name']==$_POST['foodname']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          ?>
          <script>
            // alert('Food Is Removed From Cart');
            window.location.assign('../cart.php')
          </script>
            <?php
        }
      }
      
    }
    if(isset($_POST['modqnt'])){
      foreach($_SESSION['cart'] as $key => $value){ 
         if($value['name']==$_POST['foodname']){
          $_SESSION['cart'][$key]['qnt']=$_POST['modqnt'];
           ?>
           <script>
             window.location.assign('../cart.php')
           </script>
             <?php
         }
       }

    }
    }
}
else{
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['cart'])){
            $myfood=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myfood)){
              
                ?>
        <script>
          alert('This Item Is Already Present In You Cart');
          window.location.assign('../menu.php')
        </script>
          <?php
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../menu.php')
            </script>
              <?php
        }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'fid'=>$_POST['fid'],'qnt'=>1);
            ?>
            <script>
              // alert('Food Added To Your Cart');
              window.location.assign('../menu.php')
            </script>
              <?php
        }
    }
    if(isset($_POST['removefood'])){
      foreach($_SESSION['cart'] as $key => $value){ 
        if($value['name']==$_POST['foodname']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          ?>
          <script>
            // alert('Food Is Removed From Cart');
            window.location.assign('../cart.php')
          </script>
            <?php
        }
      }
      
    }
    if(isset($_POST['modqnt'])){
      foreach($_SESSION['cart'] as $key => $value){ 
         if($value['name']==$_POST['foodname']){
          $_SESSION['cart'][$key]['qnt']=$_POST['modqnt'];
           ?>
           <script>
             window.location.assign('../cart.php')
           </script>
             <?php
         }
       }

    }
    }
}


?>
