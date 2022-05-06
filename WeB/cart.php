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
                <h1>SUMMARY</h1>
            </div>
        </div>
    </div>
    <?php include "include/footer.php"; ?>
</body>
</html>