<?php
    include "include/header.php";
    $proid = $_GET['id'];
    $sql = "Select * from trader";
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
                                $sql1 = "Select * from product where product_id = $proid";
                                $result1 = oci_parse($connection, $sql1);
                                oci_execute($result1);
                                while($row = oci_fetch_assoc($result1)){
                                    $title = $row['PRODUCT_TITLE'];
                                    $description = $row['DESCRIPTION'];
                                    $price = $row['PRICE'];
                                    $stock = $row['STOCK_QUANTITY'];
                                    $image = $row['IMAGE'];
                                    echo '<div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 40rem;">';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title">Product Details</h5>';
                                    echo '<form action="./include/updateProduct.php" method="post">';
                                    echo '<div class="form-p">';
                                    echo '<input type="hidden" name="hideProdId" value ="' . $row['PRODUCT_ID'] . '"';
                                    echo '<label for="name" style="margin-right: 12px;">Product Name: </label>';
                                    echo '<input type="text" class="forms-control" value="' . $title . '" name="title"><br>';
                                    echo '<label for="description">Description: </label><br>';
                                    echo '<textarea name="description" style="resize: none;" cols="55" rows="8">' . $description . '</textarea><br>';
                                    echo '<label for="price" style="margin-right: 65px;">Price:</label>
                                    <input type="text" class="forms-control" value= "' .$price . '" name="price">
                                    <br>';
                                    echo '<label for="stock" style="margin-right: 49px">In Stock: </label>
                                    <input type="number" class="forms-control" value="' . $stock . '" name="stock">
                                    <br>';
                                    echo '<label for="img">Image:</label>
                                    <img alt="img" src = "./products/' . $image . '" class="card-img-top">
                                    <br>';
                                    echo '<label>Change Image: &nbsp;</label><input type="file" name="image"><br>';
                                    echo '<input type="submit" class="btn btn-primary btn-card text-white" value="Update" name="updateProductBtn"> ';
                                    echo '</div>';
                                }
                            ?>
                                    </form>
                                </div>
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