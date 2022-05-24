<body>    
    <form action="login.php" method="post" class="forms">
    
        <fieldset class="border rounded-3 p-3 mt-5">
            <legend class="float-none w-auto px-3"><h1>Login</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Local's Mart</h2>
                <input type="email" name="txtEmail" class="forms-control" placeholder="Email">
                <input type="password" name="txtPassword" class="forms-control" placeholder="Password">
                <select name="users" class="forms-control">
                    <option value="">Select user type</option>
                    <option value="Customer">Customer</option>
                    <option value="Trader">Trader</option>
                </select><br>
                <input type="submit" value="Login" name="loginBtn"><br>
                <a href="forgotpwform.php" style="color:grey; text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='grey'">Forgot Password?</a><br><br><br>
                <p style="color:grey; display:inline;">Not registered yet?</p>
                <a href="./signupcustomer.php" style="text-decoration:none;">Signup now</a><br><br>
            </div>
        </fieldset>
    </form>
</body>

<?php
include 'connection.php';

if(isset($_POST['loginBtn'])){
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $user = $_POST['users'];
    $_SESSION['role'] = $_POST['users'];
    $sql = "SELECT * FROM $user where EMAIL = '$email' AND PASSWORD = '$password'";

    if ($user=='Customer'){
        $sql = "SELECT * FROM CUSTOMER where EMAIL = '$email' AND PASSWORD = '$password'";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    if($row = oci_fetch_assoc($result)){
        $_SESSION['id'] = $row['CUSTOMER_ID'];
        $_SESSION['users'] = "SELECT FIRST_NAME FROM $user WHERE EMAIL = '$email' AND PASSWORD = '$password'";
        // header('location: ./index.php');
        echo "<script>alert(\"Logged in Successfully.\");";
        echo "window.location.href=\"./index.php\"";
        echo "</script>";
    }else{
        $_SESSION['error'] = '<script>alert("User not recognized")</script>';
        echo $_SESSION['error'];
    }
    }
    else{
        $sql = "SELECT * FROM TRADER where EMAIL = '$email' AND PASSWORD = '$password' AND STATUS = 'Active'";      
    
        $result = oci_parse($connection, $sql);
    oci_execute($result);
    if($row = oci_fetch_assoc($result)){
        $_SESSION['id'] = $row['TRADER_ID'];
        $_SESSION['users'] = "SELECT FIRST_NAME FROM $user WHERE EMAIL = '$email' AND PASSWORD = '$password'";
        // header('location: ./index.php')
        echo "<script>alert(\"Logged in Successfully.\");";
        echo "window.location.href=\"./index.php\"";
        echo "</script>";
}
    else{
        $_SESSION['error'] = '<script>alert("User not recognized")</script>';
        
        echo $_SESSION['error'];
    }
}
}
?>


