<?php
include ('products.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$count = 0;
if(isset($_SESSION['cart']))
{
   $count =  count($_SESSION['cart']);
}
?>
<a href="products.php" class="btn-btn- outline-primary">My Cart<?php echo $count; ?></a>
</body>
</html>
<?php
