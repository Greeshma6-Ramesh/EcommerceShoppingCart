<?php 
include('includes/db.inc.php');
$page_title="Products Page";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container">
      $query="select * from products where name='$name'";
      $sqlrun=mysqli_query($conn,$query);

        if(mysqli_num_rows($sqlrun)>0)
        {

        }
</div>




<?php include('includes/footer.php'); ?>