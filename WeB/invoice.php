<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "include/header.php" ?>
    <div class="inv-con">
        <div class="inv-flex">
            <div class="inv-top-left">
                <h2>Invoice</h2>
                <p>Invoice No.: 123456789</p>
                <p>Date & Time: </p>
            </div>
            <br>
            <br>
            <br>
            <div class="inv-top-right">
                <img src="img/Logo-Poppins.png" alt="Logo">
                <h2>CHF Local's Mart</h2>
                <p>WY, UK</p>
                <p>chflocalmart@gmail.com</p>
                <p>chflocalsmart.com</p>
            </div>
        </div>
        <div class="inv-bill-to">
            <h2>Bill To</h2>
            <p>[Name]</p>
            <p>[Address]</p>
            <p>[Phone]</p>
            <p>[Payment mode]</p>
        </div>
        <div class="inv-table">
        <div class="cart-table">
                <table>
                    <tr>
                        <th>S.N.</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src=""></td>
                        <td></td>
                        <td></td>
                        <td><a href="" class="btn btn-danger btn-card"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src=""></td>
                        <td></td>
                        <td></td>
                        <td><a href="" class="btn btn-danger btn-card"><i class="fas fa-trash"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="inv-bot-right">
            <hr>
            <h4>SubTotal: </h4>
            <h4>+</h4>
            <h4>-</h4>
            <hr>
            <h3>Net Amount: </h3>
        </div>
        <br>
        <div class="inv-foot">
            <div class="inv-foot-flex">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <p class="text-center">Thank you for shopping.</p>
        </div>
    </div>
    <?php include "include/footer.php" ?>
</body>
</html>