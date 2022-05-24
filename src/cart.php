<?php
session_start();
//   session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col- lg-9">

                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                          $total = 0;
                          $ptotal = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                
                                  $total = $value['price']*$value['Quantity'];
                                  $ptotal += $value['price']*$value['Quantity']; $total =  $value['price']*$value['Quantity'];
                                //   print_r($value);
                                // echo $total;
                                echo "<tr>
                          <td>$sr</td>
                          <td>$value[Item_name]</td>
                         
                          <td>$value[price]<input type = 'hidden' class = 'iprice' value ='$$value[price]' </td>
                         
                         
                          <td>
                          <form action = 'config.php' method = 'POST'>
                          <input class = 'text-center iquantity' name = 'Mod_Quantity' onchange ='this.form.submit();' type = 'number' value = '$value[Quantity]' min = '1' max='10'>
                          <input type= 'hidden' name = 'Item_name' value = '$value[Item_name]'> 
                          <td>$total</td>
                          </form>
                          </td>
                          <td class = 'itotal'> </td>
                          <form action = 'config.php' method = 'POST'>
                          <td>
                          <button name = 'Remove' class='btn btn-small btn-outline-danger'>X</button>
                          <input type= 'hidden' name = 'Item_name' value = '$value[Item_name]'> 
                          
                          </form>
                         
                          </td>
                         
                          </tr>";
                            # code...
                            }

                        }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3>Grand Total:</h3>
                    <h2><?php echo $ptotal ?></h2>
                    <br>
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div><br>
                        <button class="btn btn-primary btn-block">Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>