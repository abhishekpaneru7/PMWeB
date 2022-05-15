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
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 120px background-color: #7c4dff; height: 2px"><br>      
          <form action="shop.php" method="post">
            <label>Shop Type:</label>
            <select name="trader">
              <option disabled selected>--Please Select--</option>
              <option value="Butcher" <?php echo isset($_POST['trader']) && $_POST['trader'] === 'Butcher' ? 'selected' : ''; ?>>Butcher</option>
              <option value="Bakery" <?php echo isset($_POST['trader']) && $_POST['trader'] === 'Bakery' ? 'selected' : ''; ?>>Bakery</option>
              <option value="Fishmonger" <?php echo isset($_POST['trader']) && $_POST['trader'] === 'Fishmonger' ? 'selected' : ''; ?>>Fishmonger</option>
              <option value="Greengrocher" <?php echo isset($_POST['trader']) && $_POST['trader'] === 'Greengrocher' ? 'selected' : ''; ?>>Greengrocher</option>
              <option value="Dellicatessen" <?php echo isset($_POST['trader']) && $_POST['trader'] === 'Dellicatessen' ? 'selected' : ''; ?>>Dellicatessen</option>
            </select><br><br>
            <?php
              if(isset($_POST['trader']) && $_POST['trader'] === 'Butcher'){
                echo '<label for="category">Category:</label><br>';
                echo '<input type="checkbox" name="category[]" value="red meat"';
                echo '> Red Meat<br>';
                echo '<input type="checkbox" name="category[]" value="white meat"';
                echo '> White Meat<br><br>';
              }
              if(isset($_POST['trader']) && $_POST['trader'] === 'Greengrocher'){
                echo '<input type="checkbox" name="category[]" value="fruit"';
                echo '> Fruits<br>';
                echo '<input type="checkbox" name="category[]" value="vegetable"';
                echo '> Vegetable<br><br>';
              }
              if(isset($_POST['trader']) && $_POST['trader'] === 'Fishmonger'){
                echo '<input type="checkbox" name="category[]" value="fish"';
                echo '> Fish<br>';
                echo '<input type="checkbox" name="category[]" value="shellfish"';
                echo '> Shellfish<br><br>';
              }
            ?>
            <label for="sort">Sort by:</label><br>
            <input type="radio" name="sort" value="asc" <?php echo (isset($_POST['sort']) && $_POST['sort'] == 'asc') ? "checked = checked" : '';?>> Name A to Z<br>
            <input type="radio" name="sort" value="desc" <?php echo (isset($_POST['sort']) && $_POST['sort'] == 'desc') ? "checked = checked" : '';?>> Name Z to A<br>
            <input type="radio" name="sort" value="low" <?php echo (isset($_POST['sort']) && $_POST['sort'] == 'low') ? "checked = checked" : '';?>> Price low to high<br>
            <input type="radio" name="sort" value="high" <?php echo (isset($_POST['sort']) && $_POST['sort'] == 'high') ? "checked = checked" : '';?>> Price high to low<br><br>
            <label for="price">Price Range:</label><br>
            <input type="number" name="min" placeholder="Min-Price" style="width: 120px;">
            <span>&#8594</span>
            <input type="number" name="max" placeholder="Max-Price" style="width: 120px;">
            <br><br><button type="submit" name="btnFilter">SORT BY</button>
          </form>
        </div>
        <div class="shop-products">
          <div class="container-fluid">
            <h1 class="text-center pb-4 mt-4" >PRODUCTS</h1>
            <div class="col-10 mx-auto">
              <div class="row text-center">
                <?php $sql = 'Select * from product'; include './include/sortfunction.php'; ?>
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