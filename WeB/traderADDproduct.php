<?php
    include "include/header.php";
?>
    <div class="search-bar">
        <div class="flex-search">
            <div class="side-cat-search">
                <h2>Trader Name</h2>
                <p class="text-center">Trader Role</p>
                <p class="text-center">Trader Shop</p>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 180px; background-color: #7c4dff; height: 2px">
                    <div class="text-center">
                        <a href="traderPandC.php">Products</a>
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
                        <a href="traderCRUDproduct.php" class="btn btn-primary btn-card">Add New Products</a>
                        <a href="" class="btn btn-danger btn-card">Delete All Products</a>
                    </div>
                    <div class="col-10 mx-auto">
                        <div class="row text-center">  
                            <div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 40rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Product Details</h5>
                                    <form action="">
                                        <div class="form-p">
                                            <label for="name" style="margin-right: 12px;">Product Name: </label>
                                            <input type="text" class="forms-control">
                                            <br>
                                            <label for="description">Description: </label>
                                            <br>
                                            <textarea name="description" style="resize: none;" cols="55" rows="8"></textarea>
                                            <br>
                                            <label for="type">Type: </label>
                                            <select name="type" id="" class="text-center">
                                                <option disabled selected>--Select Type--</option>
                                                <option value="1">something</option>
                                                <option value="2">anything</option>
                                                <option value="3">etc..</option>
                                            </select>
                                            <br>
                                            <label for="price" style="margin-right: 65px;">Price: </label>
                                            <input type="text" class="forms-control">
                                            <br>
                                            <label for="stock" style="margin-right: 49px">In Stock: </label>
                                            <input type="number" class="forms-control">
                                            <br>
                                            <label for="img">Image:</label>
                                            <input type="image" alt="img">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-card text-white" value="Add">
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
?>