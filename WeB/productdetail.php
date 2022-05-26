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
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
}
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
    <form action=<?php echo "\"productdetail.php?id=$prodid\" method=\"post\"";?>>
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
            <div class="rate-comment container mx-auto text-center">
                <textarea name="ratecomment" class="text-center" style="resize: none;" cols="150" rows="2" placeholder="Comment Here!"></textarea>
                <div class="submit-btn mx-auto text-center">
                    <input type="submit" class="btn btn-danger text-white" for="ratecomment" name="reviewBtn">
                </div>
            </div>
            </form>
            <br>
                <?php
                    if(isset($_POST['reviewBtn'])){
                        if (empty($_SESSION['users'])){
                            echo"<script>alert(\"Please Login to your account to rate our products.\");";
                      echo "window.location.href=\"./login.php\";";
                  echo "</script>";
                  }
                  else{
                        $rating = $_POST['star'];
                        $comment = $_POST['ratecomment'];
                        $query = "Insert into REVIEW(REVIEW_ID, COMMENTs, RATING, REVIEW_DATE, PRODUCT_ID, CUSTOMER_ID) values(null, '$comment', '$rating', CURRENT_DATE, $prodid, $id)";
                        $insert = oci_parse($connection, $query);
                        oci_execute($insert);
                    } 
                ?>
                <?php
                    $sql = "SELECT * FROM REVIEW r, CUSTOMER c where c.CUSTOMER_ID = r.CUSTOMER_ID and r.PRODUCT_ID = $prodid";
                    $result = oci_parse($connection, $sql);
                    oci_execute($result);
                    while($row = oci_fetch_assoc($result)){
                        $name = $row['FIRST_NAME'] . " " . $row['LAST_NAME'];
                        $rating = $row['RATING'];
                        $comment = $row['COMMENTS'];
                        $date = $row['REVIEW_DATE'];
                        echo '<div class="rate-c-v">';
                        echo '<h4 style="display:inline; float:left;">' . $name . '</h4>';
                        echo '<p style="color:grey; display:inline; float:right;">Posted date: ' . $date . '</p><br><br>';
                        for($i = 0; $i < 5; $i++){
                            if($rating > 0){
                                echo '<span class="fa fa-star checked" style="float: left;"></span>';
                                $rating--;
                            }elseif($rating == 0){
                                echo '<span class="fa fa-star" style="float:left;"></span>';
                            }
                        }
                        echo "<br><p>$comment</p>";
                        echo "</div>";
                    }
                }
                ?>
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