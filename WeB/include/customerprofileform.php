
<head>
</head>
<body>
    <form action="signupcustomer.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Customer Profile</h1></legend>
            <div class="forms-content">
                <h2>Please update your profile below!</h2>
                <!-- <label for="profileImage" class="forms-label">Profile Picture</label>
                <img src="pih.png" alt="" class="forms-content" height="30px" width="30px">
                <a href="" class="forms-content">Change</a> -->
                <br>
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtFirstName" class="forms-control" value=""><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control" value=""><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control" value=""><br>
                <label for="Age" class="forms-label" style="padding-right:50px">Age</label>
                <input type="number" name="txtAge" class="forms-control" value=""><br>
                <label for="Gender" class="forms-label" style="padding-right:50px">Gender</label>
                <section class="radio-list">
                    <input type="radio" name="rdoGender" value="M" class="radio"> <span class="radio">Male</span>
                    <input type="radio" name="rdoGender" value="F" class="radio"> <span class="radio">Female</span>
                    <input type="radio" name="rdoGender" value="O" class="radio"> <span class="radio">Other</span>
                </section><br><br>
                <a href="" class="forms-control">Click Here to Change Password</a><br><br>
                <input type="submit" value="Update Profile" name="registerBtn"><br>
            </div>
        </fieldset>
    </form>
</body>