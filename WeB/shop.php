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
          <!-- <h5 class="text-center">NAME</h5> -->
          <!-- <form class="d-flex" action="" method="post">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="shop.php" type="button search-btn" class="btn btn-primary" name="btnSearch">
                <i class="bi bi-search"></i>
              </a>
            </form> -->
         
        <br>
        <br>
        
        
        <form action="" method="POST"> 
        <label>Shop Type:</label>
        <select name = "trader" id="trader">
            <option value="" hidden selected disabled>--Please select--</option>
            <option value="All" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'All')) 
                    echo 'selected'; ?>
                >All</option>
            <option value="Bakery" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'Bakery')) 
                    echo 'selected'; ?>
                >Bakery</option>
            <option value="Butcher" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'Butcher')) 
                    echo 'selected'; ?>
                >Butcher</option>
            <option value="fishmonger" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'Fishmonger')) 
                    echo 'selected'; ?>
                >Fishmonger</option>
                <option value="greengrocer" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'Greengrocher')) 
                    echo 'selected'; ?>
                >Greengrocher</option>
                <option value="delicatessen" <?php 
                if (isset($_POST['category']) && ($_POST['category'] == 'Delicatessen')) 
                    echo 'selected'; ?>
                >Fishmonger</option>
        </select><br/><br>

<div class="category">
          <label>Category:</label>  <br>
          <input type="radio" id="Category" name="Category" value="redmeat"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'RED MEAT')) 
          echo 'selected';
          ?>>
          <label for="meat"> Red Meat </label>
          <br>
          <input type="radio" name="Category" value="whitemeat"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'WHITE MEAT')) 
          echo 'selected';
          ?>>
          <label for="meat"> White Meat </label>
          <br>
          <input type="radio" name="Category" value="fruit"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'FRUIT')) 
          echo 'selected';
          ?>>
          <label for="fruit"> Fruit </label>
          <br>
          <input type="radio" name="Category" value="vegetable"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'VEGETABLE')) 
          echo 'selected';
          ?>>
          <label for="vegetable">Vegetable</label>
          <br>
          <input type="radio" name="Category" value="baked item"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'BAKED ITEMS')) 
          echo 'selected';
          ?>>
          <label for="fish">Fish</label>
          <br>
          <input type="radio" name="Category" value="Fish"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'FISH')) 
          echo 'selected';
          ?>>
          <label for="shellfish">Shellfish</label>
          <br>
          <input type="radio" name="Category" value="shellfish"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'SHELLFISH')) 
          echo 'selected';
          ?>>
          <label for="baked item"> Baked items </label><br>
          <input type="radio" name="Category" value="ready-to-eat item"<?php
          if (isset($_POST['Category']) && ($_POST['Category'] == 'READY TO EAT ITEMS')) 
          echo 'selected';
          ?>>
          <label for="ready-to-eat item"> Ready to eat items </label>
          
          </div><br>
        
        <div class="sort">
        <label>Sort by:</label>  <br>      
            <input type="radio" id="sort" name="sort" value="sortAtoZ" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortAtoZ')) 
                    echo ' checked="checked"'; 
                ?> />Name, A to Z<br/>
            <input type="radio" id="sort" name="sort" value="sortZtoA" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortZtoA')) 
                    echo ' checked="checked"'; 
                ?> />Name, Z to A<br/>
            <input type="radio" id="sort" name="sort" value="sortLowtoHigh" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortLowtoHigh')) 
                    echo ' checked="checked"'; 
                ?> />Price, Low to High<br/>
            <input type="radio" id="sort" name="sort" value="sortHightoLow" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortHightoLow')) 
                    echo ' checked="checked"'; 
                ?> 
                />Price, High to Low<br/>
                </div>
          <br>
          <div class="text-center">
          <h5 class="text-center">Shop Type</h5>
          <input type="radio" name="trader" value="bakery">
          <label for="bakery"> Bakery </label>
          <br>
          <input type="radio" name="trader" value="butcher">
          <label for="butcher"> Butcher </label>
          <br>
          <input type="radio" name="trader" value="fishmonger">
          <label for="fishmonger"> FishMonger </label>
          <br>
          <input type="radio" name="trader" value="greengrocher">
          <label for="greengrocher">Green Grocher</label>
          <br>
          <input type="radio" name="trader" value="delicatessen">
          <label for="delicatessen"> Delicatessen </label>
          </div>
          <br>
          <br>
          <h5 class="text-center">ALPHABET</h5>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="AESC" id="sort">
          <label for="AESC"> AESC </label>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="alphabet" value="DESC" id="sort">
          <label for="DESC"> DESC </label>
          <br>
          <br>
          <h5 class="text-center">PRICE</h5>
          <div class="flex-search">
            <input type="number" placeholder="Min-Price" style="width: 120px;">
            <span>&#8594;</span>
            <input type="number" placeholder="Max-Price" style="width: 120px;">
        </div><br><br>
        <button type="submit" name="btnSubmit">SORT BY</button>
        </div>
        </form>
        <?php
      

        if (isset($_POST['btnSubmit'])){
          $category =trim($_POST['Category']);
            if($category=="WHITE MEAT"){
                $sql="SELECT * FROM product where CATEGORY='WHITE MEAT'";
            }elseif($category=="RED MEAT"){
                $sql="SELECT * FROM product where CATEGORY='RED MEAT'";
            }elseif($category=="FRUIT"){
                $sql="SELECT * FROM product where CATEGORY='FRUIT'";
            }elseif($category=="VEGETABLE"){
                $sql="SELECT * FROM product where CATEGORY='VEGETABLE'";
              }elseif($category=="FISH"){
                $sql="SELECT * FROM product WHERE CATEGORY = 'FISH'"; 
              }elseif($category=="SHELLFISH"){
                $sql="SELECT * FROM product WHERE CATEGORY = 'SHELLFISH'";  
            }elseif($category=="BAKED ITEMS"){
                $sql="SELECT * FROM product WHERE CATEGORY = 'BAKED ITEMS'";
            }elseif($category=="READY TO EAT ITEMS"){
              $sql="SELECT * FROM product WHERE CATEGORY = 'READY TO EAT ITEMS'";            
            }else{
            $sql = "SELECT * FROM product";
        }
        
      
      $sort=$_POST['sort'];
      if(!empty($sort)){
        if ($sort=='sortAtoZ'){
            $sql.=" order by PRODUCT_TITLE ASC";
        }
        else if ($sort=='sortZtoA'){
            $sql.=" order by PRODUCT_TITLE DESC";
        }
        else if ($sort=='sortLowtoHigh'){
             $sql.=" order by Price ASC";
        }
        else if ($sort=='sortHightoLow'){
            $sql.=" order by Price DESC";
        }
    }
    
  }
         ?>
        <div class="shop-products">
        <div class="container-fluid">
  <h1 class="text-center pb-4 mt-4" >PRODUCTS</h1>
  <div class="col-10 mx-auto">
  <div class="row text-center">
   
    <?php
        $sql = 'Select * from product' ;
        $query = oci_parse($connection, $sql);
        oci_execute($query);
          while($row = oci_fetch_assoc($query)){
            $id = $row['PRODUCT_ID'];
            echo '<div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">';
              echo '<img src="./products/' .$row['IMAGE'] . '"alt="Card image cap" height="262px" class="card-img-top">';
              echo '<div class="card-body">';
                echo '<h5 class="cart-title">' . $row['PRODUCT_TITLE'] . '</h5>';
                echo '<h5 class="cart-title">£' . $row['PRICE'] . '</h5>';
                // @parvat-be sure to make make definite size for product details so that all containers
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