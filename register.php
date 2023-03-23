<?php
session_start();
$page_title="Registration Form";
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="py-0">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert">
                <?php
                     if(isset($_SESSION['status']))
                     {
                           echo  "<h4>".$_SESSION['status']."</h4>";
                           unset($_SESSION['status']);
                     }
                ?>
            </div>
            <div class="card shadow">
                <div class="card-header">
                    <h5>Registration Form</h5>
                </div>
                <div class="card-body">
                    <form id="registration" action="registercode.php" method="post" >
                     
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" minlength="2" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Zipcode</label>
                            <input type="text" name="zip" class="form-control zipcode" required>
                            <span id="errorzip" style="color:red"></span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone number</label>
                            <input type="text" name="phone" class="form-control third-phone" required>
                            <span id="errorphone" style="color:red"></span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email-id</label>
                            <input type="text" name="email" class="form-control checkemail" required>
                            <span class="errordisplay" style="color:red"></span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" id="pass" name="newpwd" class="form-control" required>
                        </div>
                        <div class="form-group  mb-3">
                            <label for="">Re-type Password</label>
                            <input type="text" name="confirmpwd" class="form-control" required>
                        </div>
                        <div class="form-group  mb-3">
                           <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>