<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "include/header.php"; ?>
    <br>
    <br>
    <br>
    <div class="cart-page" style="border: 2px solid black;">
        <h1 class="text-center">My Cart</h1>
        <div class="flex-cart">
            <div class="cart-table">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Food</td>
                        <td>55</td>
                        <td>2</td>
                        <td>110</td>
                        <td><a href="" class="link link-primary">DELETE</a></td>
                    </tr>
                    <tr>
                        <td>Food</td>
                        <td>55</td>
                        <td>2</td>
                        <td>110</td>
                        <td><a href="" class="link link-primary">DELETE</a></td>
                    </tr>
                </table>
            </div>
            <div class="cart-sum" style="border: 2px solid black;">
                <div class="container-fluid" style="width: 21rem;">
                    <h3 class="text-center mt-3">SUMMARY</h3>
                    <div class="card-body">
                        <h5 class="card-title">Total (n - items) : 44</h5>
                        <div class="">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Enter Discount Code" aria-label="Search">
                                <button type="button search-btn" class="btn btn-primary">
                                APPLY
                            </form>
                        </div>
                        <br>
                        <h6 class="card-title">Discount: </h6>
                        <hr>
                        <h6 class="cart-title">Grand Total: Rs.66</h6>
                        <a href="#" class="btn btn-danger">Check OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php"; ?>
</body>
</html>