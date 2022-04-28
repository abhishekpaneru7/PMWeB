<head>
</head>
<body>

    <form action="signupcustomerform.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Customer Registration</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Locals Mart</h2>
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtLastName" class="forms-control"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control"><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control"><br>
                <label for="Age" class="forms-label" style="padding-right:50px">Age</label>
                <input type="number" name="txtAge" class="forms-control"><br>
                <label for="Gender" class="forms-label" style="padding-right:50px">Gender</label>
                <section class="radio-list">
                    <input type="radio" name="rdoGender" value="Male" class="radio"> <span class="radio">Male</span>
                    <input type="radio" name="rdoGender" value="Female" class="radio"> <span class="radio">Female</span>
                    <input type="radio" name="rdoGender" value="Other" class="radio"> <span class="radio">Other</span>
                </section><br>
                <label for="Password" class="forms-label">Password</label>
                <input type="password" name="txtPassword" class="forms-control">
                <label for="ConfPassword" class="forms-label">Confirm Password</label>
                <input type="password" name="txtConfPassword" class="forms-control"><br>
                <input type="checkbox" name="terms&cond"> I accept terms and condition <br>
                <input type="submit" value="Register" name="registerBtn"><br>
                <a href="./signuptrader.php" style="text-decoration: none;">Register As Trader</a>
            </div>
        </fieldset>
    </form>
</body>