<?php include './include/connection.php' ?>
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
?>
    <br>
    <div class="product-detail">
        <?php
            $prodid = $_GET['id'];
            $sql = "Select * from product where PRODUCT_ID = $prodid";
            $result = oci_parse($connection, $sql);
            oci_execute($result);
            while($row = oci_fetch_assoc($result)){
                echo '<h1 class="text-center">' . $row['PRODUCT_TITLE'] . '</h1>';
                echo '<div class="flex-items">';
                    echo '<div class="product-img">';
                        echo '<img src="./products/' . $row['IMAGE'] . '" alt="" class="size">';
                    echo '</div>';
                    echo '<div class="product-details">';
                        echo '<h5>PRODUCT DETAILS:</h5>';
                        echo '<p>' . $row['DESCRIPTION'] . '</p>';
                        echo '<h3>PRICE : £' . $row['PRICE'] . '</h3>';
                        include './include/rating.php';
                        echo '<h5>' . $row['STOCK_QUANTITY'] .'<br> REMAINING IN STOCK</h5>';
                        echo '<div class="flex-items">';
                            echo "<a href=\"./include/addtocart.php?id=$prodid\" class=\"btn btn-primary\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></a>&nbsp;";
                            // echo '<a href="" class="btn btn-danger">Buy Now</a>';
                        echo '</div>';
                    echo '</div><br>';
                echo '</div><br>';
            }
        ?>
    </div>
    <div class="product-detail">
        <div class="rate-product">
            <div class="rating">
                <br>
                <p class="p-r text-center">Rate Our Product</p>
                <input id="radio1" type="radio" name="star" value="5" class="star" />
                <label for="radio1">&#9733;</label>
                <input id="radio2" type="radio" name="star" value="4" class="star" />
                <label for="radio2">&#9733;</label>
                <input id="radio3" type="radio" name="star" value="3" class="star" />
                <label for="radio3">&#9733;</label>
                <input id="radio4" type="radio" name="star" value="2" class="star" />
                <label for="radio4">&#9733;</label>
                <input id="radio5" type="radio" name="star" value="1" class="star" />
                <label for="radio5">&#9733;</label>
            </div>
            <br>
            <div class="rate-comment container mx-auto text-center">
                <textarea name="ratecomment" class="text-center" style="resize: none;" cols="150" rows="2" placeholder="Comment Here!"></textarea>
                <div class="submit-btn mx-auto text-center">
                    <input type="submit" class="btn btn-danger text-white" for="ratecomment">
                </div>
                <div class="rate-c-v">
                    <h4>By: AAA(Customer)</h4>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore assumenda commodi ea officiis atque?</p>
                </div>
                <div class="rate-c-v">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <h4>By: AAA(Customer)</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore assumenda commodi ea officiis atque?</p>
                </div>
                <div class="rate-c-v">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h4>By: AAA(Customer)</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore assumenda commodi ea officiis atque?</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        "use strict";

        $('.star').on('change', function() {
        let stars = $(this).val();
        /* Make an AJAX call to register the rating */
        console.log(stars);
        });

    </script>
    <?php include "include/footer.php"; ?>
</body>
</html>