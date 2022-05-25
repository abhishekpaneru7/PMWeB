<?php include 'connection.php'; ?>
<body>
    <form action="signuptrader.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Trader Registration</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Local's Mart</h2>
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtFirstName" class="forms-control" value="<?php echo $_POST ['txtFirstName'] ?? ''; ?>"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control" value="<?php echo $_POST ['txtLastName'] ?? ''; ?>"><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control" value="<?php echo $_POST ['txtEmail'] ?? ''; ?>"><br>
                <label for="ShopName" class="forms-label">Shop Name</label>
                <input type="text" name="txtShopName" class="forms-control"  value="<?php echo $_POST ['txtShopName'] ?? ''; ?>"><br>
                <label for="TraderType" class="forms-label">Shop Type</label>
                <select name="TraderType" class="forms-control">
                    <option value="">Select Shop Type</option>
                    <option value="1" <?php echo isset($_POST['TraderType']) && $_POST['TraderType'] === '1' ? 'selected' : ''; ?>>Butcher</option>
                    <option value="2" <?php echo isset($_POST['TraderType']) && $_POST['TraderType'] === '2' ? 'selected' : ''; ?>>Bakery</option>
                    <option value="3" <?php echo isset($_POST['TraderType']) && $_POST['TraderType'] === '3' ? 'selected' : ''; ?>>Fishmonger</option>
                    <option value="4" <?php echo isset($_POST['TraderType']) && $_POST['TraderType'] === '4' ? 'selected' : ''; ?>>Greengrocher</option>
                    <option value="5" <?php echo isset($_POST['TraderType']) && $_POST['TraderType'] === '5' ? 'selected' : ''; ?>>Dellicatessen</option>
                </select>
                <label for="Password" class="forms-label">Password</label>
                <input type="password" name="txtPassword" class="forms-control">
                <label for="ConfPassword" class="forms-label">Confirm Password</label>
                <input type="password" name="txtConfPassword" class="forms-control"><br>
                <input type="checkbox" name="termsCond" <?php if(isset($_POST['termsCond'])){ echo 'checked'; } ?>> I accept <a href="tac.php">terms and condition</a> <br>
                <input type="submit" value="Register" name="registerBtn"><br>
                <a href="./signupcustomer.php" style="text-decoration: none;">Register As Customer</a><br><br><br>
                <p style="color:grey; display:inline;">Already Member? </p>
                <a href="./login.php" style="text-decoration: none;">Login</a>
            </div>
        </fieldset>
    </form>
</body>
<?php
    $firstname = "";
    $lastname = "";
    $email = "";
    $shopname = "";
    $shopid = "";
    $password = "";
    $confpassword = "";
    $status = "pending";
    if(isset($_POST['registerBtn'])){
        if(!empty($_POST['txtFirstName'])){
            $firstname = $_POST['txtFirstName'];
            if(!empty($_POST['txtLastName'])){
                $lastname = $_POST['txtLastName'];
                if(!empty($_POST['txtEmail'])){
                    $email = $_POST['txtEmail'];
                    //Unique Email verification
                    $emailverify = "SELECT * FROM Trader WHERE email = '$email'";
                    $select = oci_parse($connection, $emailverify);
                    oci_execute($select, OCI_NO_AUTO_COMMIT);
                    $rows = oci_fetch_all($select, $res);
                    if ($rows > 0) {
                        echo "<script>alert(\"This email already exist.\")</script>";
                    }
                    elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){                        
                        if(!empty($_POST['txtShopName'])){
                            $shopname = $_POST['txtShopName'];
                            if(!empty($_POST['TraderType'])){
                                $shopid = $_POST['TraderType'];
                                if(!empty($_POST['txtPassword'])){
                                    $password = $_POST['txtPassword'];
                                    if(preg_match('/[a-z]/',$password) && preg_match('/[A-Z]/',$password) && preg_match('/[0-9]/',$password)){
                                        if(!empty($_POST['txtConfPassword'])){
                                            $confpassword = $_POST['txtConfPassword'];
                                            if($password === $confpassword){
                                                if(!empty($_POST['termsCond'])){

                                                    $sql = "insert into trader(trader_id, first_name, last_name, email, shop_name, password, shop_id, status) values(null, '$firstname', '$lastname', '$email', '$shopname','$password', $shopid, '$status')";
                                                    $query = oci_parse($connection, $sql);
                                                    // echo $sql;
                                                    
                //email verification                                    
                if (oci_execute($query)){
                $sender= $email;
                $to="chflocalmart@gmail.com";
                $subject ="Trader Activation Email";
                $message ="<h2>Click <a href='http://localhost/pm/PMWeB/WeB/verifyTrader.php?fname=$firstname'>Activate</a> to approve Trader </h2> ";
                $headers = "From: CHFLOCALMART  <" . $sender . ">\n" ;
                $headers .= "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=utf-8\n";
                $headers .= "Return-Path: " . $sender . "\n";
                $headers .= "X-Mailer: PHP/" . phpversion();

                if(mail($to,$subject,$message, $headers))
                {
                    echo "<script>alert(\"Request Send Account now pending.\");";
                    echo "window.location.href=\"./index.php\"";
                    echo "</script>";
                }
                else{
                    echo "<script>alert(\"Unable to send Email.\");";
                }
            }
   
                                                }else{
                                                    echo "<script>alert(\"please agree to terms & condition.\")</script>";
                                                }
                                            }else{
                                                echo "<script>alert(\"Password and confirm password must match.\")</script>";
                                            }
                                        }else{
                                            echo "<script>alert(\"Confirm paassword cannot be empty.\")</script>";
                                        }
                                    }else{
                                        echo "<script>alert(\"Password must contain a uppercase, lowercase and number.\")</script>";
                                    }
                                }else{
                                    echo "<script>alert(\"Password cannot be empty.\")</script>";
                                }
                            }else{
                                echo"<script>alert(\"select shop type\")</script>";
                            }
                        }else{
                            echo"<script>alert(\"shop name cannot be empty\")</script>";
                        }
                    }else{
                        echo"<script>alert(\"please enter valid email\")</script>";
                    }
                }else{
                    echo"<script>alert(\"please enter your email\")</script>";
                }
            }else{
                echo"<script>alert(\"Lastname cannot be empty.\")</script>";
            }
        }else{
            echo "<script>alert(\"Firstname cannot be empty.\")</script>";
        }
    }
?>