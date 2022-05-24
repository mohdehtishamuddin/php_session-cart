<?php
 session_start();
//  session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_cart']))
    {
     if(isset($_SESSION['cart']))
   {
 $item = array_column($_SESSION['cart'],'Item_name');
 if(in_array($_POST['Item_name'],$item))
 {
echo"<script>
alert('Item already added');
 window.location.href='products.php';
 </script>";
 }
 else{
  $count = count($_SESSION['cart']);
  $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'price'=>$_POST['price'],'Quantity'=>1);
  // print_r($_SESSION['cart']);
  echo"<script>
      alert('Item added');
    window.location.href='products.php';
     </script>";
 }
}
  else{
       $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'price'=>$_POST['price'],'Quantity'=>1);
       echo"<script>
      alert('Item added');
    window.location.href='products.php';
     </script>";
  }
    }
    if(isset($_POST['Remove']))
    {
      foreach ($_SESSION['cart'] as $key => $value) {
        if($value['Item_name']==$_POST['Item_name']){
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo "<script>
        alert('Item Removed');
        window.location.href='products.php';
        </script>";
        }
      }
    }
    if(isset($_POST['Mod_Quantity']))
    {
      foreach ($_SESSION['cart'] as $key => $value) {
        if($value['Item_name']==$_POST['Item_name']){
          $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
        
        // print_r($_SESSION['cart']);
        echo "<script>
        window.location.href='products.php';
        </script>";
        }
      }
    }
}
?>
