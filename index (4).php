<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'ecommerce');
$sql = "SELECT * FROM product WHERE featured=1";
$featured = $con->query($sql);
?>

<!DOCTYPE html>
<html>

				<head>
								<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
    .cards-wrapper{
        display:flex;
    }
</style>
				</head>
				<body>
                <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="com.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="iphone.php">Iphone</a></li>
            <li><a class="dropdown-item" href="huawei.php">Huawei</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="asus.php">Asus ROG Phone 5</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
			<div class="container-fluid text-center">
			<h1>IPHONE 13</h1>
			</div>
			<h2 class="text-center">YOUR NEW SUPERPOWER</h2>
			<div>
							<?php
while($product= mysqli_fetch_assoc($featured)):
?>
<div class="text-center">
<h2><?= $product['title'];?></h2><br>
<img src="<?= $product['image'];?>" width="80%" style="border-radius:10px;" alt="<?=$product['title'];?>"></img>
<h4>From Price: <?= $product['price'];?> before trade-in</h4>
<h4><?= $product['description'];?></h4>
<button class="btn btn-dark">purchase</button><br><br>
<?php endwhile; ?>


<div id="carouselExampleControls" class="carousel slide mx-5" data-bs-ride="carousel">
  <div class="carousel-inner mt-5">
    <div class="carousel-item active">
      <img src="https://www.apple.com/v/iphone-13/g/images/overview/hero/hero_endframe__drwl8v63jyqa_large.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.apple.com/in/iphone-13/images/overview/hero/hero_2_static__w0gvqnaqsjm2_large.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.apple.com/v/iphone-13/g/images/overview/design/green_finish__d3ptz593tlqq_large.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<a class="btn btn-primary m-5" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  know more
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Best Mobiles</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    Smartphones on this Gadgets 360 Best Mobile Phones page are sorted by the date launched, so the further down you go, the older the phone. The ratings visible on each phone on the page are the overall ratings of each phone. On this page, you can see the price and key specifications of each phone right here, and you can click on each phone’s review links to see their detailed reviews, and clicking on the phone’s name takes you to its detailed specifications page. Phones listed here were launched in the past one year.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Best Mobiles
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="https://gadgets360.com/vivo-x80-pro-5g-price-in-india-104343">Vivo X80 Pro</a></li>
        <li><a class="dropdown-item" href="https://gadgets360.com/motorola-edge-30-pro-price-in-india-106230">Motorola Edge 30 Pro</a></li>
        <li><a class="dropdown-item" href="https://gadgets360.com/iqoo-9-se-price-in-india-106156">iQOO 9 SE</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="card">
  <img src="https://www.apple.com/v/iphone-13/g/images/overview/cinematicmode/focus_1_static__f4ndtr5g722q_large.jpg" class="card-img-top" alt="image">

  <div class="card-body">
    <h5 class="card-title">IPHONE 13</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card m-4">
  <img src="https://www.apple.com/v/iphone-13/g/images/overview/cinematicmode/dolby_vision_static__wm8pythr2may_large.jpg" class="card-img-top" alt="image">

  <div class="card-body">
    <h5 class="card-title">IPHONE 13</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<blockquote class="blockquote">
  <p class="m-4">Want to change the focus or adjust the blur after shooting wraps? No problem. iPhone lets you do it with a few taps and swipes. Even pro movie cameras can’t do that.</p>
</blockquote>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="card d-block w-100" style="width: 18rem;">
  <img src="https://www.apple.com/v/iphone-13/g/images/overview/cameragallery/night_mode_3__bz7ohs9t286a_large.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">IPHONE 13</h5>
    <p class="card-text">Night mode senses low-light scenes and automatically adjusts to take bright, clear photos with amazingly rich colours.</p>
    <a href="#" class="btn btn-primary stretched-link">visit here</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card d-block w-100" style="width: 18rem;">
  <img src="https://www.apple.com/v/iphone-13/g/images/overview/cinematicmode/dolby_vision_static__wm8pythr2may_large.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">IPHONE 13</h5>
    <p class="card-text">Night mode senses low-light scenes and automatically adjusts to take bright, clear photos with amazingly rich colours.</p>
    <a href="#" class="btn btn-primary stretched-link">visit here</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card d-block w-100" style="width: 18rem;">
  <img src="https://www.apple.com/v/iphone-13/g/images/overview/cameragallery/night_mode_3__bz7ohs9t286a_large.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">IPHONE 13</h5>
    <p class="card-text">Night mode senses low-light scenes and automatically adjusts to take bright, clear photos with amazingly rich colours.</p>
    <a href="#" class="btn btn-primary stretched-link">visit here</a>
  </div>
</div>
    </div>
  </div>
</div>


</div>

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Very long link 1</a>
          </li>
          <li>
            <a href="#!">Very long link 2</a>
          </li>
          <li>
            <a href="#!">Very long link 3</a>
          </li>
          <li>
            <a href="#!">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<nav aria-label="Page navigation example">
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="com.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="iphone.php">1</a></li>
  <li class="page-item"><a class="page-link" href="huawei.php">2</a></li>
  <li class="page-item"><a class="page-link" href="asus.php">3</a></li>
</ul>
</nav>

			</div>

				</body>
</html>