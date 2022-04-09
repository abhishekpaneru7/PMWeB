<head>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="signupform.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3">
            <legend class="float-none w-auto px-3"><h1>Trader Registration</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Locals Mart</h2>
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtLastName" class="forms-control"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control"><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control"><br>
                <label for="ShopName" class="forms-label">Shop Name</label>
                <input type="text" name="txtShopName" class="forms-control"><br>
                <label for="ShopType" class="forms-label">Shop Type</label>
                <select name="ShopType" class="forms-control">
                    <option value="">Select Shop Type</option>
                    <option value="sample1">sample1</option>
                    <option value="sample2">sample2</option>
                    <option value="sample3">sample3</option>
                    <option value="sample4">sample4</option>
                    <option value="sample5">sample5</option>
                </select>
                <label for="Password" class="forms-label">Password</label>
                <input type="password" name="txtPassword" class="forms-control">
                <label for="ConfPassword" class="forms-label">Confirm Password</label>
                <input type="password" name="txtConfPassword" class="forms-control"><br>
                <input type="checkbox" name="terms&cond"> I accept terms and condition <br>
                <input type="submit" value="Register" name="registerBtn"><br>
                <a href="./signupcustomer.php" style="text-decoration: none;">Register As Customer</a>
            </div>
        </fieldset>
    </form>
</body>