<?php
session_start();
$page_title="Login Form";
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="py-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <?php
                     if(isset($_SESSION['status']))
                     {
                           ?>
                           <div class="alert alert-success">
                             <h4><?= $_SESSION['status']; ?></h4>
                           </div>
                           <?php
                           unset($_SESSION['status']);  
                     }
                ?>
            <div class="card shadow">
                <div class="card-header">
                    <h5>Login Form</h5>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">E-mail id</label>
                            <input type="text" name="emailid" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="pwd" class="form-control">
                        </div>
                        
                        <div class="form-group  mb-3">
                           <button type="submit"  name="login_btn" class="btn btn-primary">Login</button>
                           <a href ="passwordreset.php" class="float-end">Forgot your password?</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>