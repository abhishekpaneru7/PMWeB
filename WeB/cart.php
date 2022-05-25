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
      if (empty($_SESSION['users'])){
        echo"<script>alert(\"Please Login to your account to access cart.\");";
            echo "window.location.href=\"./login.php\";";
        echo "</script>";
        }
    else{
        $id = $_SESSION['id'];
?>
    <div class="cart-page" style="border: 2px solid black;">
        <h1 class="text-center">My Cart</h1>
        <div class="flex-cart">
            <div class="cart-table">
                <table>
                    <tr>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                        <?php
                            $sql = "Select * from cart c, product p where p.product_id = c.product_id and customer_id = $id";
                            $result = oci_parse($connection, $sql);
                            oci_execute($result);
                            while($row = oci_fetch_assoc($result)){
                                $pid = $row['PRODUCT_ID'];
                                echo '<tr>';
                                echo '<td><img src="./products/' . $row['IMAGE'] . '" height="100px"</td>';
                                echo '<td>' . $row['PRODUCT_TITLE'] . '</td>';
                                echo '<td>' . $row['PRICE'] . '</td>';
                                echo '<td>' . $row['QUANTITY'] . '</td>';
                                echo '<td>' . $row['TOTAL'] . '</td>';
                                echo "<td><a href=\"./include/deletecartproduct.php?id=$pid\" class=\"btn btn-danger btn-card\"><i class=\"fas fa-trash\"></i></a></td>";
                                echo '</tr>';
                            }
                            $sql1 = "select SUM(TOTAL) as GRAND_TOTAL, COUNT(QUANTITY) as TOTAL_QUANTITY from cart";
                            $result1 = oci_parse($connection, $sql1);
                            oci_execute($result1);
                            while($row = oci_fetch_assoc($result1)){
                                $grand = $row['GRAND_TOTAL'];
                                $totalQuantity = $row['TOTAL_QUANTITY'];
                            }
                        ?>
                    <tr>
                    </tr>
                </table>
            </div>
            <div class="cart-sum" style="border: 2px solid black;">
                <div class="container-fluid" style="width: 21rem;">
                    <h3 class="text-center mt-3">SUMMARY</h3>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo "Total items(" . $totalQuantity . ")"; ?></h5>
                        <div class="">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Enter Discount Code" aria-label="Search">
                                <button type="button search-btn" class="btn btn-primary">
                                APPLY
                            </form>
                        </div>
                        <br>
                        <h6 class="card-title text-center">Discount: </h6>
                        <hr>
                        <h6 class="cart-title text-center"><?php echo "Grand Total: £" . $grand; ?></h6>
                        <div class="text-center">
                        <a href="#" class="btn btn-danger btn-card">Check OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <?php } include "include/footer.php"; ?>
</body>
</html>