<?php 
include('includes/db.inc.php');
$page_title="Home Page";
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<h4 class="title"><b>Free delivery on orders above 500$</b></h4>
<div id="carouselExampleCaptions" class="carousel slide carous">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="../photos/apple.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="cartitle">Iphone 14 Pro Max</h5>
        <p class="cardesc">Love the power,Love the price</p>
      </div>
    </div>
    <div class="carousel-item  c-item">
      <img src="../photos/ipad.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="cartitle">iPad</h5>
        <p class="cardesc">Lovable.Drawable.Magical</p>
      </div>
    </div>
    <div class="carousel-item  c-item">
      <img src="../photos/watch.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="cartitle">Watch</h5>
        <p class="cardesc">A  healthy leap ahead.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  <div class="container py-5">
    <div class="row row-eq-height text-center">
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 1" style="height: 600px;">
            <img src="../photos/laptop.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 1">
            <div class="card-body">
              <h4 class="card-title">MacBook</h4>
              <p class="card-text">10-Core CPU,16-Core GPU,16GB Unified Memory,512GB SSD Storage¹</p>
              <p class="card-text">Price: $1000</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 2" style="height: 600px;">
            <img src="../photos/iphone.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 2">
            <div class="card-body">
              <h4 class="card-title">iphone 14 pro</h4>
              <p class="card-text">Apple - iPhone 14 Pro Max 1TB - Space Black</p>
              <p class="card-text">Price: $700</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 3" style="height: 600px;">
            <img src="../photos/ipadpro.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 3">
            <div class="card-body">
              <h4 class="card-title">ipad pro</h4>
              <p class="card-text">Apple - 12.9-Inch iPad Pro (Latest Model) with Wi-Fi - 512GB - Silver</p>
              <p class="card-text">Price: $900</p>
              <button type="submit" class="btn btn-warning my-3"  name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <style>
      .row-eq-heigh{
        display: flex;
      }
    </style>
    <br>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 4" style="height: 600px;">
            <img src="../photos/Airpods.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 4">
            <div class="card-body">
              <h4 class="card-title"> Apple Airpods</h4>
              <p class="card-text">Apple EarPods with Lightning Connector</p>
              <p class="card-text">Price: $150</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 5" style="height: 600px;">
            <img src="../photos/Watch.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 5">
            <div class="card-body">
              <h4 class="card-title"> Apple Watch</h4>
              <p class="card-text">Apple Watch Series 5 GPS + Cellular, 40mm blue Case with Pink Sand Sport Band
                - S/M & M/L</p>
              <p class="card-text">Price: $500</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 6" style="height: 600px;">
            <img src="../photos/AppleTv.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 6">
            <div class="card-body">
              <h4 class="card-title"> Apple Tv</h4>
              <p class="card-text">Apple TV HD 32GB - Black Model: MR912LL/A SKU:5901531</p>
              <p class="card-text">Price: $450</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
       </form>
      </div>
    </div>
    <br>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 7" style="height: 600px;">
            <img src="../photos/Pencil.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 7">
            <div class="card-body">
              <h4 class="card-title"> Apple Pencil</h4>
              <p class="card-text">Apple - Pencil (2nd Generation)<br> Model:MU8F2AM/A SKU:6252354</p>
              <p class="card-text">Price: $150</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
    </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
       <div class="card shadow">
          <div class="card-img" alt="Product 8" style="height: 600px;">
            <img src="../photos/Mouse.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 8">
            <div class="card-body">
              <h4 class="card-title"> Smart mouse</h4>
              <p class="card-text">Magic Mouse is wireless and rechargeable, <br>with an optimized foot
                design that lets it <br>glide smoothly across your desk. </p>
              <p class="card-text">Price: $87</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 9" style="height: 600px;">
            <img src="../photos/AirTag.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 9">
            <div class="card-body">
              <h4 class="card-title"> AirTag</h4>
              <p class="card-text">Apple - AirTag - Silver<br> Model:MX532AM/A SKU:6461348</p>
              <p class="card-text">Price: $50</p>
              <button type="submit"  class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <br>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 10" style="height: 600px;">
            <img src="../photos/trackpad.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 10">
            <div class="card-body">
              <h4 class="card-title"> Magic Trackpad</h4>
              <p class="card-text">Apple Magic Trackpad - trackpad - Bluetooth - Black</p>
              <p class="card-text">Price: $129</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 11" style="height: 600px;">
            <img src="../photos/Folio.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 11">
            <div class="card-body">
              <h4 class="card-title"> Apple Smart Keyboard Folio</h4>
              <p class="card-text">Apple Smart Keyboard Folio for iPad Pro 12.9inch (6th generation)
                in Black</p>
              <p class="card-text">Price: $150</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
        <div class="card shadow">
          <div class="card-img" alt="Product 12" style="height: 600px;">
            <img src="../photos/homepod.png" width="600px" height="600px" class="img-fluid img-thumbnail" alt="Product 12">
            <div class="card-body">
              <h4 class="card-title"> Home Pod</h4>
              <p class="card-text">Apple - HomePod (2nd Generation) Smart Speaker with Siri - Midnight <br>Model:MQJ73LL/A SKU:6519336</p>
              <p class="card-text">Price: $250</p>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>