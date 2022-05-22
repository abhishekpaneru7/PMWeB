<?php
    include 'connection.php'; 
    // $id = $_GET['id'];
    $id = $_SESSION['id'];
    $sql = "Select * from CUSTOMER where CUSTOMER_ID = $id";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    $table = "customer";
    $firstname = "";
    $lastname = "";
    $email = "";
    $age = "";
    $gender = "";
    while($row = oci_fetch_assoc($result)){
        $firstname = $row['FIRST_NAME'];
        $lastname = $row['LAST_NAME'];
        $email = $row['EMAIL'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];
    }
?>
<head>
</head>
<body>
    <form action="./include/updateprofile.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Customer Profile</h1></legend>
            <div class="forms-content">
                <h2>Please update your profile below!</h2>
                <br>
                <input type="hidden" name="hideCustID" value = "<?php echo $id;?>">
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtFirstName" class="forms-control" value="<?php echo $firstname;?>"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control" value="<?php echo $lastname;?>"><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control" value="<?php echo $email;?>"><br>
                <label for="Age" class="forms-label" style="padding-right:50px">Age</label>
                <input type="number" name="txtAge" class="forms-control" value="<?php echo $age;?>"><br>
                <label for="Gender" class="forms-label" style="padding-right:50px">Gender</label>
                <section class="radio-list">
                    <input type="radio" name="rdoGender" value="M" class="radio" <?php echo ($gender == 'M') ? "checked = checked" : ''; ?>> <span class="radio">Male</span>
                    <input type="radio" name="rdoGender" value="F" class="radio" <?php echo ($gender == 'F') ? "checked = checked" : ''; ?>> <span class="radio">Female</span>
                    <input type="radio" name="rdoGender" value="O" class="radio" <?php echo ($gender == 'O') ? "checked = checked" : ''; ?>> <span class="radio">Other</span>
                </section><br><br>
                <a href="" class="forms-control">Click Here to Change Password</a><br><br>
                <input type="submit" value="Update Profile" name="custUpdtBtn"><br>
            </div>
        </fieldset>
    </form>
</body>
