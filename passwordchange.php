<?php
$page_title="Password Update";
include('includes/header.php');
include('includes/db.inc.php');
session_start();
?>
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <?php
                     if(isset($_SESSION['status']))
                     {
                           ?>
                           <div class="alert alert-success">
                             <h5><?= $_SESSION['status']; ?></h5>
                           </div>
                           <?php
                           unset($_SESSION['status']);  
                     }
                ?>
            <div class="card shadow">
                <div class="card-header">
                    <h5>Password Change</h5>
                </div>
                <div class="card-body">
                    <form action="pwdresetcode.php" method="POST">
                        <div class="form-group mb-3">
                            <input type="hidden" value=<?php if(isset($_GET['token'])) {echo $_GET['token'];}?> name="pwdtoken" class="form-control">
                            <label for="">E-mail id</label>
                            <input type="text" value=<?php if(isset($_GET['email'])) {echo $_GET['email'];}?> name="emailid" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">New Password</label>
                            <input type="text" name="newpwd" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirm Password</label>
                            <input type="text" name="confirmpwd" class="form-control">
                        </div>
                        
                        <div class="form-group  mb-3">
                           <button type="submit"  name="pwdupdate" class="btn btn-primary">Update password</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>