
<?php session_start();?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
   <div class="container-fluid">
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        
        <li class="nav-item px-2">
          <a class="nav-link" href="register.php">Signup</a>
        </li>
        <li class="nav-item dropdown px-2 product">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
           Products
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Iphone</a></li>
            <li><a class="dropdown-item" href="#">Ipad</a></li>
            <li><a class="dropdown-item" href="#">Watch</a></li>
            <li><a class="dropdown-item" href="#">EarPods</a></li>
          </ul>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <div class="search">
      <form class="form-inline" role="search">
        <input class="form-control mr-sm-2 searchbar" type="search" placeholder="Search" aria-label="Search" name="prodsearch">
        <button class="btn btn-outline-success" type="submit" name="prodsubmit">Search</button><&nbsp>
        <button type="submit" class="cart"><i class="fa-sharp fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i></button>
      </form>
      
      </div>
    
    </div>
  </div>
</nav>

     