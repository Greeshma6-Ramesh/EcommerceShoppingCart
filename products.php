<?php 
include('includes/db.inc.php');
$page_title="Products Page";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
$name="laptop";
echo "<div class="container">";
      $query="select * from products where name like "%$name%"";
      $sqlrun=mysqli_query($conn,$query);

        if(mysqli_num_rows($sqlrun)>0)
        {
            echo "hello";
        }
echo "</div>";

?>


<?php include('includes/footer.php'); ?>