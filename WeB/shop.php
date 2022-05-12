<?php include './include/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "include/header.php"; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- @sak-yomaimg haru rakha -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner-1.jpg" height="600px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner-2.jpg" height="600px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner-3.jpg" height="600px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="shop-container">
      <div class="shop-flex">
        <div class="sort-shop">
          <h3>SORT BY:</h3>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 120px; background-color: #7c4dff; height: 2px">
          <h5 class="text-center">NAME</h5>
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="search.php" type="button search-btn" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </a>
            </form>
          <br>
          <h5 class="text-center">ALPHABET</h5>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="AESC">
          <label for="AESC"> AESC </label>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="DESC">
          <label for="AESC"> DESC </label>
          <br>
          <br>
          <div class="text-center">
          <h5 class="text-center">CATEGORY</h5>
          <input type="radio" name="category" value="fish">
          <label for="fish"> Fish </label>
          <br>
          <input type="radio" name="category" value="cake">
          <label for="cake"> Cake </label>
          </div>
          <br>
          <div class="text-center">
          <h5 class="text-center">TRADER</h5>
          <input type="radio" name="trader" value="fishmonger">
          <label for="AESC"> FishMonger </label>
          <br>
          <input type="radio" name="trader" value="baker">
          <label for="baker"> Baker </label>
          </div>
          <br>
          <h5 class="text-center">PRICE</h5>
          <div class="flex-search">
            <input type="number" placeholder="Min-Price" style="width: 120px;">
            <span>&#8594;</span>
            <input type="number" placeholder="Max-Price" style="width: 120px;">
          </div>
        </div>
        <div class="shop-products">
        <div class="container-fluid">
  <h1 class="text-center pb-4 mt-4" >PRODUCTS</h1>
  <div class="col-10 mx-auto">
  <div class="row text-center">
    <?php
        $sql = 'Select * from product';
        $query = oci_parse($connection, $sql);
        oci_execute($query);
          while($row = oci_fetch_assoc($query)){
            $id = $row['PRODUCT_ID'];
            echo '<div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">';
              echo '<img src="./products/' .$row['IMAGE'] . '"alt="Card image cap" height="262px" class="card-img-top">';
              echo '<div class="card-body">';
                echo '<h5 class="cart-title">' . $row['PRODUCT_TITLE'] . '</h5>';
                echo '<h5 class="cart-title">£' . $row['PRICE'] . '</h5>';
                echo '<p class="card-text">' . $row['DESCRIPTION'] . '</p>';
                echo '</div>';
                echo '<a href="productdetail.php" class="btn btn-primary btn-card" style="margin: 0 24px;">View Product</a>';
            echo '</div>';
          }
      ?>
      <!-- <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/pih.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Rs: 100</h5>
          <h5 class="card-title">Food</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eaque aspernatur quam repudiandae commodi dolorum!</p>
          <a href="productdetail.php" class="btn btn-primary btn-card">View Product</a>
        </div>
      </div>
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/pih.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Make Payment</h5>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolorum reprehenderit reiciendis impedit distinctio.</p>
        </div>
        <span>&#8594;</span>
      </div>
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/pih.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Make Payment</h5>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolorum reprehenderit reiciendis impedit distinctio.</p>
        </div>
        <span>&#8594;</span>
      </div>
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/pih.png " alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Collect Order</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit amet, ullam explicabo tenetur possimus illo.</p>
        </div>
        <span>&#8594;</span>
      </div> -->
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
    <?php
        include "include/footer.php";
    ?>
</body>
</html>