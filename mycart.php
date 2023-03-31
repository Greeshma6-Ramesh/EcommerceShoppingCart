<?php
session_start();
include('includes/db.inc.php');
$page_title="Order Confirmation";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container">
<div class="row">
        <div class="col-md-12 text-center border rounded bg-light my-5">
         <h4>Cart Items</h4>
        </div>

        <div class="col-md-9">
        <table class="table">
          <thead class="text-center">
           <tr>
           <th scope="col">Item</th>
           <th scope="col">Price</th>
            <th scope="col">Quantity</th>
           </tr>
        </thead>
       <tbody class="text-center">
        <?php
        $total=0;
    
         if(isset($_SESSION['cart']))
         {
            foreach($_SESSION['cart'] as $key=>$value)
            {
                $total=$total+$value['Price'];
                echo "
                <tr>
                 <td>$value[Item_Name]</td>
                 <td>$value[Price]</td>
                 <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                 <form action='index.php' method='POST'>
                   <td><button name='remove' class='btn btn-sm btn-outline-danger'>Remove</button></td>
                   <input type='hidden' name='Item_name' value='$value[Item_Name]'>
                 </form>
              </tr>";
            }
         }
         else
         {
             echo "Your cart is empty";
         }

       ?>
       
   </tbody>
</table>
        </div>

        <div class="col-md-3">
            <div class="border bg-light rounded p-4">
               <h4>Total:</h4>
               <h5 class="text-right"><?php echo '$'.$total ?></h5>
               <br>
               <form>
                 <button class="btn btn-primary btn-block">Proceed to checkout</button>
              </form>
            </div>
        </div>
</div>
</div>

