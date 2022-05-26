<?php
    include "include/header.php";
    $sql = "Select * from trader";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    while($row = oci_fetch_assoc($result)){
        $trader = $row['FIRST_NAME'] . " " . $row['LAST_NAME'];
        $shop = $row['SHOP_NAME'];
        $shopId = $row['SHOP_ID'];
    }
?>
    <div class="search-bar">
        <div class="flex-search">
            <div class="side-cat-search">
                <h2><?php echo $trader; ?></h2>
                <p class="text-center"><?php echo $shop; ?></p>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 180px; background-color: #7c4dff; height: 2px">
                    <div class="text-center">
                        <a href="traderPandC.php">Products</a>
                        <br>
                        <br>
                        <a href="http://localhost:8080/apex/f?p=101:LOGIN_DESKTOP:652668156601:::::">Reports</a>
                        <br>
                        <br>
                        <a href="profiletraderform.php">Profile</a>
                        <br>
                        <br>
                        <a href="" class="btn btn-danger btn-card">Sign Out</a>
                    </div>
                <br>
            </div>
            <div class="main-cat-item">
                <div class="container-fluid">
                    <div class="add-p-btn ml-2 mt-2 pb-2">
                        <a href="traderCRUDproduct.php" class="btn btn-primary btn-card">Add New Products</a>
                        <a href="" class="btn btn-danger btn-card">Delete All Products</a>
                    </div>
                    <div class="col-10 mx-auto">
                        <div class="row text-center"> 
                        <h2>Add Product</h2> 
                            <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 40rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Product Details</h5>
                                    <!-- <form action="traderAddproduct.php" method="post"> -->
                                    <form action="traderADDproduct.php" method="post">
                                        <div class="form-p">
                                            <label for="name" style="margin-right: 12px;">Product Name: </label>
                                            <input type="text" class="forms-control" name="title">
                                            <br>
                                            <label for="description">Description: </label>
                                            <br>
                                            <textarea name="description" style="resize: none;" cols="55" rows="8"></textarea>
                                            <br>
                                            <label for="category">Category: </label>
                                            <input type="text" name="category">
                                            <br>
                                            <label for="price" style="margin-right: 65px;">Price: </label>
                                            <input type="text" class="forms-control" name ="price">
                                            <br>
                                            <label for="stock" style="margin-right: 49px">In Stock: </label>
                                            <input type="number" class="forms-control" name="stock">
                                            <br>
                                            <label for="img">Image:</label>
                                            <input type="file" alt="img" name="image">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-card text-white" value="Add" name="addBtn">
                                        </div>
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

    if(isset($_POST['addBtn'])){
        if(!empty($_POST['title'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            if(!empty($_POST['category'])){
                $category = $_POST['category'];
                if(!empty($_POST['price'])){
                    $price = $_POST['price'];
                    if(!empty($_POST['stock'])){
                        $stock = $_POST['stock'];
                        if(!empty($_POST['image'])){
                            $image = $_POST['image'];
                            $sql = "insert into product(product_id, product_title, category, description, price, stock_quantity, image, shop_id, rating) values(null, '$title', '$category', '$description', $price, $stock, '$image', $shopId, null)";
                            $query = oci_parse($connection, $sql);
                            oci_execute($query);
                            echo "<script>alert(\"Product added succesfully.\");";
                            echo "window.location.href=\"./traderCRUDproduct.php?title=$title\"";
                            echo "</script>";
                        }else{
                            echo "<script>alert(\"Choose prod   uct image.\")</script>";
                        }
                    }else{
                        echo "<script>alert(\"Input product stock quantity.\")</script>";
                    }
                }else{
                    echo "<script>alert(\"Input product category.\")</script>"; 
                }
            }else{
                echo "<script>alert(\"Input product category.\")</script>";
            }
        }else{
            echo "<script>alert(\"Input product title.\")</script>";
        }
    }
?>