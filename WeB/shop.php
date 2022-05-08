<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        include "include/header.php";
    ?><br><br><br><br>
    <div class="shop-container">
      <div class="shop-flex">
        <div class="sort-shop">
          <h3>SORT BY:</h3>
          <hr>
          <h5 class="text-center">ALPHABET</h5>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="AESC">
          <label for="AESC"> AESC </label>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="DESC">
          <label for="AESC"> DESC </label>
          <br>
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
    
      <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/pih.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Place Order</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eaque aspernatur quam repudiandae commodi dolorum!</p>
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
      </div>
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