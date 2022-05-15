<?php
  // $sql = 'Select * from product';
  if(isset($_POST['btnFilter'])){
    if(isset($_POST['trader'])){
      $trader = $_POST['trader'];
      $sql = 'Select * from product p, shop s where s.shop_id = p.shop_id and LOWER(TRADERTYPE) = LOWER(\'' . $trader . '\')';
      if(isset($_POST['category'])){
        $categories = $_POST['category'];
        $count = count($categories);
        $sql = $sql . 'and LOWER(CATEGORY) IN (';
        foreach($categories as $category){
          $sql = $sql . '\'' . $category . '\'';
          $count--;
          if($count > 0){
            $sql = $sql . ',';
          }
        }
        $sql = $sql . ')';
      }
    }
    if(isset($_POST['sort'])){
      $alpha = $_POST['sort'];
      if($alpha == 'low'){
        $sql = $sql . ' order by price asc';
      }elseif($alpha == 'high'){
        $sql = $sql . ' order by price desc';
      }else{
        $sql = $sql . ' order by product_title ' . $alpha;
      }
    }
  }
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