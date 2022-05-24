<?php
    include 'connection.php';
    $id = $_SESSION['id'];
    $sql = "Select * from TRADER where TRADER_ID = $id";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    $firstname = "";
    $lastname = "";
    $shopname = "";
    $email = "";
    while($row = oci_fetch_assoc($result)){
        $firstname = $row['FIRST_NAME'];
        $lastname = $row['LAST_NAME'];
        $shopname = $row['SHOP_NAME'];
        $email = $row['EMAIL'];
    }
?>
<head>
</head>
<body>
    <form action="./include/traderupdateprofile.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Trader Profile</h1></legend>
            <div class="forms-content">
                <h2>Please update your profile below!</h2>
                <br>
                <input type="hidden" name="hideTraderID" value = "<?php echo $id; ?>">
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtFirstName" class="forms-control" value="<?php echo $firstname;?>"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control" value="<?php echo $lastname;?>"><br>
                <!-- <label for="Username" class="forms-label">Username</label>
                <input type="text" name="txtShopOne" class="forms-control" value=""><br> -->
                <label for="ShopOne" class="forms-label">Shop Name</label>
                <input type="text" name="txtShopName" class="forms-control" value="<?php echo $shopname;?>"><br>
                <!-- <label for="Email" class="forms-label" style="padding-right:45px">Shop 2</label>
                <input type="text" name="txtUsername" class="forms-control" value=""><br> -->
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control" value="<?php echo $email;?>"><br>
                <a href="" class="forms-control">Click Here to Change Password</a><br><br>
                <input type="submit" value="Update Profile" name="tradeUpdtBtn"><br>
            </div>
        </fieldset>
    </form>
</body>