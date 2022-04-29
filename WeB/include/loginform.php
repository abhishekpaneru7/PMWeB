<head>
</head>
<body>
    
    <form action="login.php" method="post" class="forms">
    
        <fieldset class="border rounded-3 p-3 mt-5">
        <!-- <div class="container" style="background-color: white; border:2px solid black;"> -->
            <legend class="float-none w-auto px-3"><h1>Login</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Locals Mart</h2>
                <input type="email" name="txtEmail" class="forms-control" placeholder="Email">
                <input type="password" name="txtPassword" class="forms-control" placeholder="Password">
                <select name="users" class="forms-control">
                    <option value="">Select user type</option>
                    <option value="Customer">Customer</option>
                    <option value="Trader">Trader</option>
                </select><br>
                <input type="submit" value="Login" name="loginBtn"><br>
                <a href="#" style="color:grey; text-decoration:none;">Forgot Password?</a><br><br><br>
                <p style="color:grey; display:inline;">Not registered yet?</p>
                <a href="./signupcustomer.php" style="text-decoration:none;">Signup now</a><br><br>
            </div>
        </fieldset>
        <!-- </div> -->
    </form>
    
</body>
</html>