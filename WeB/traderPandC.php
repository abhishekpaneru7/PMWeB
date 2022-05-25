<?php
    include "include/header.php";
    $id = $_SESSION['id'];
    // $sql = "Select * from trader t, product p where t.shop_id = p.shop_id and t.trader_id = $id";
    $sql = "Select * from trader t";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    while($row = oci_fetch_assoc($result)){
        $trader = $row['FIRST_NAME'] . " " . $row['LAST_NAME'];
        $shop = $row['SHOP_NAME'];
    }
?>
    <div class="search-bar">
        <div class="flex-search">
            <div class="side-cat-search">
                <h2><?php echo $trader; ?></h2>
                <p class="text-center"><?php echo $shop; ?></p>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 180px; background-color: #7c4dff; height: 2px">
                    <div class="text-center">
                        <a href="traderPandC.php">All Products</a>
                        <br>
                        <br>
                        <a href="">Reports</a>
                        <br>
                        <br>
                        <a href="">Profile</a>
                        <br>
                        <br>
                        <a href="" class="btn btn-danger btn-card">Sign Out</a>
                    </div>
                <br>
            </div>
            <div class="main-cat-item">
                <div class="container-fluid">
                    <div class="add-p-btn ml-2 mt-2 pb-2">
                        <a href="traderADDproduct.php" class="btn btn-primary btn-card">Add New Products</a>
                        <a href="" class="btn btn-danger btn-card">Delete All Products</a>
                    </div>
                    <div class="col-10 mx-auto">
                        <div class="row text-center">  
                            <?php
                                $sql1 = "Select * from trader t, product p where t.shop_id = p.shop_id and t.trader_id = $id";
                                $result1 = oci_parse($connection, $sql1);
                                oci_execute($result1);
                                while($row = oci_fetch_assoc($result1)){
                                    $proid = $row['PRODUCT_ID'];
                                    echo '<div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">';
                                        echo '<img class="card-img-top" src="products/' . $row['IMAGE'] . '" alt="Card image cap">';
                                        echo '<div class="card-body">';
                                            echo '<h5 class="card-title">£' . $row['PRICE'] . '</h5>';
                                            echo '<h5 class="card-title">' . $row['PRODUCT_TITLE'] . '</h5>';
                                            echo '<p class="card-text">' . $row['DESCRIPTION'] . '</p>';
                                            echo '<h5 class="card-text">Product Type: ' . $row['CATEGORY'] . '</h5>';
                                            echo '<h5 class="card-text">Stock Available: ' . $row['STOCK_QUANTITY'] . '</h5>';
                                        echo '</div>';
                                        echo '<div class="flex-search mx-auto">';
                                            echo "<a href=\"./traderCRUDproduct.php?id=$proid\" class=\"btn btn-primary btn-card\">Update</a>
                                            &nbsp;";
                                            echo "<a href=\"./traderDeleteProduct.php?id=$proid\" class=\"btn btn-danger btn-card\">Delete</a>";
                                        echo '</div>';
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include "include/footer.php";
?>