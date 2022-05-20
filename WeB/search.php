<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "include/header.php"; ?>
    <div class="hero-image">
        <div class="moto-text">
          <h1>SEARCH ITEMS FOR: </h1>
        </div>
        <div class="search-btn">
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="search.php" type="button search-btn" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </a>
            </form>
        </div>
    </div>
    <div class="search-bar">
      <div class="flex-search">
        <div class="side-cat-search">
        <h3>SORT BY:</h3>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 120px; background-color: #7c4dff; height: 2px">
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
        <div class="main-cat-item">
        <div class="container-fluid">
  <h1 class="text-center pb-4 mt-4" >PRODUCTS</h1>
  <div class="col-10 mx-auto">
  <div class="row text-center">
    
  <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">
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
    <?php include "include/footer.php"; ?>
</body>
</html>
