<?php include "include/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php if(empty($_SESSION['users'])){
      include "include/header.php"; }
   elseif($_SESSION['role']=='Customer'){
      include "include/customerheader.php";}
    else{
      include "include/traderheader.php";
        }
?>
    <div class="hero-image">
        <div class="moto-text">
          <h1>We Are CHF Local's Mart.</h1>
          <p>Quality, Organic, Natural products directly from the farmer's hands to your doorsteps.</p>
        </div>
        <?php include './include/search.php'; ?>
        <!-- <div class="search-btn">
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="search.php" type="button search-btn" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </a>
            </form>
        </div> -->
    </div>
    <div class="container">
      <h1 class="text-center pb-4 mt-4">Special Category Discounts</h1>
      <div class="col-12 mx-auto">
      <div class="row">
    <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="img/DairyProd.jpg" alt="Card image cap" height="60%">
      <div class="card-body">
        <h5 class="card-title">Dairy Products</h5>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
        <?php echo "<a href=searchresult.php?trader=Dellicatessen class=\"btn btn-primary btn-card\" >Explore</a>";?>
      </div>
    </div>
    <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="img/MeatProd.jpg" alt="Card image cap" height="60%">
      <div class="card-body">
        <h5 class="card-title">Meat Products</h5>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
        <?php echo "<a href=searchresult.php?trader=Butcher class=\"btn btn-primary btn-card\" >Explore</a>";?>
      </div>
    </div>
    <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="img/SeaProd.jpg" alt="Card image cap" height="60%">
      <div class="card-body">
        <h5 class="card-title">Sea Food</h5>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
        <?php echo "<a href=searchresult.php?trader=Fishmonger class=\"btn btn-primary btn-card\" >Explore</a>";?>
      </div>
    </div>
    <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="img/VegetableProd.jpg" alt="Card image cap" height="60%">
      <div class="card-body">
        <h5 class="card-title">Vegetables</h5>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
        <?php echo "<a href=searchresult.php?trader=Greengrocher class=\"btn btn-primary btn-card\" >Explore</a>";?>
      </div>
    </div>
    </div>
</div>  
  </div>
  <div class="container">
    <h1 class="text-center pb-5 mt-4">Highest Rated Products</h1>
    <div class="col-12 mx-auto">
    <div class="row">
  <?php
    $sql = 'select * from product where rating is not null and rownum <= 4 order by rating desc';
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    while($row = oci_fetch_assoc($result)){
      $id = $row['PRODUCT_ID'];
      echo '<div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">';
        echo '<img class="card-img-top" src="./products/' .$row['IMAGE'] . '" alt="Card image cap" height="262px">';
        echo '<div class="card-body">';
          echo '<h5 class="card-title">' .$row['PRODUCT_TITLE'] . '</h5>';
          echo '<p class="card-text">' . $row['DESCRIPTION'] . '</p>';
          include './include/rating.php';
          echo "<br><a href=productdetail.php?id=$id class=\"btn btn-primary text-center btn-card\">View Product</a>";
        echo '</div>';
      echo '</div>';
    }
  ?>
  <!-- <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="img/Dragonfruit.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Food</h5>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
      <a href="productdetail.php" class="btn btn-primary text-center btn-card">Details</a>
    </div>
  </div> -->


  <!-- <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="img/KingCrab.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Food</h5>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
      <a href="#" class="btn btn-primary text-center">View Product</a>
    </div>
  </div>
  <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="img/BlueBerry.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Food</h5>
      
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
      <a href="#" class="btn btn-primary text-center">View Product</a>
    </div>
  </div>
  <div class="card  col-lg-3 py-2 m-2 mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="img/BlueCheese.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Food</h5>
      
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum culpa autem dolores eaque sapiente ad.</p>
      <a href="#" class="btn btn-primary text-center">View Product</a>
    </div> 
  </div>-->
  </div>
</div>
</div>  
</div>
<br>
<div class="back-con">
<div class="container-fluid">
  <h1 class="text-center pb-6 mt-2 text-u" >How We Work?</h1>
  <div class="col-8 mx-auto pb-2 mt-2">
  <div class="row text-center">
    
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/icon-bag.png" alt="Card image cap" style="height: 40% !important; width: 70% !important; margin-left: 13.5% !important;">
        <div class="card-body">
          <h5 class="card-title">Place Order</h5>
          <p class="card-text">Any product you choose is sent to your cart through which your orders will can placed.</p>
        </div>
        <span>&#8594;</span>
      </div>
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/icon-pay.png" alt="Card image cap" style="height: 40% !important; width: 55% !important; margin-left: 23% !important;">
        <div class="card-body">
          <h5 class="card-title">Make Payment</h5>
          <p class="card-text">Your orders are recieved after the payment is confirmed. Then you will recieve the details of your order and the delivery.</p>
        </div>
        <span>&#8594;</span>
      </div>
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/icon-box.png " alt="Card image cap" style="height: 40% !important; width: 70% !important; margin-left: 13.5% !important;">
        <div class="card-body">
          <h5 class="card-title">Collect Order</h5>
          <p class="card-text">Your order will be placed according to the details that you recieved after confirmation of the order placement.</p>
        </div>
        <span>&#8594;</span>
      </div>
    </div>
</div>
</div>
</div>
<?php include "include/footer.php"; ?>
</body>
</html>