<head>
</head>
<body>

    <form action="signupcustomer.php" method="post" class="forms">
        <fieldset class="border rounded-3 p-3 mt-4">
            <legend class="float-none w-auto px-3"><h1>Customer Registration</h1></legend>
            <div class="forms-content">
                <h2>Welcome to CHF Locals Mart</h2>
                <label for="fistName" class="forms-label">First Name</label>
                <input type="text" name="txtFirstName" class="forms-control" value="<?php echo $_POST ['txtFirstName'] ?? ''; ?>"><br>
                <label for="LastName" class="forms-label">Last Name</label>
                <input type="text" name="txtLastName" class="forms-control" value="<?php echo $_POST ['txtLastName'] ?? ''; ?>"><br>
                <label for="Email" class="forms-label" style="padding-right:50px">Email</label>
                <input type="email" name="txtEmail" class="forms-control" value="<?php echo $_POST ['txtEmail'] ?? ''; ?>"><br>
                <label for="Age" class="forms-label" style="padding-right:50px">Age</label>
                <input type="number" name="txtAge" class="forms-control" value="<?php echo $_POST ['txtAge'] ?? ''; ?>"><br>
                <label for="Gender" class="forms-label" style="padding-right:50px">Gender</label>
                <section class="radio-list">
                    <input type="radio" name="rdoGender" value="M" class="radio" <?php echo (isset($_POST['rdoGender']) && $_POST['rdoGender'] == 'M') ? "checked = checked" : ''; ?>> <span class="radio">Male</span>
                    <input type="radio" name="rdoGender" value="F" class="radio"<?php echo (isset($_POST['rdoGender']) && $_POST['rdoGender'] == 'F') ? "checked = checked" : ''; ?>> <span class="radio">Female</span>
                    <input type="radio" name="rdoGender" value="O" class="radio" <?php echo (isset($_POST['rdoGender']) && $_POST['rdoGender'] == 'O') ? "checked = checked" : ''; ?>> <span class="radio">Other</span>
                </section><br>
                <label for="Password" class="forms-label">Password</label>
                <input type="password" name="txtPassword" class="forms-control">
                <label for="ConfPassword" class="forms-label">Confirm Password</label>
                <input type="password" name="txtConfPassword" class="forms-control"><br>
                <input type="checkbox" name="termsCond" <?php if(isset($_POST['termsCond'])){ echo 'checked'; } ?>> I accept terms and condition <br>
                <input type="submit" value="Register" name="registerBtn"><br>
                <a href="signuptrader.php" style="text-decoration: none;">Register As Trader</a><br><br><br>
                <p style="color:grey; display:inline;">Already Member? </p>
                <a href="./login.php" style="text-decoration: none;">Login</a>
            </div>
        </fieldset>
    </form>
</body>
<?php
 include 'connection.php';
 $firstname = "";
 $lastname = "";
 $email = "";
 $age = "";
 $gender = "";
 $password = "";
 $confpassword = "";
 if(isset($_POST['registerBtn'])){
  if(!empty($_POST['txtFirstName'])){
   $firstname = $_POST['txtFirstName'];
   if(!empty($_POST['txtLastName'])){
    $lastname = $_POST['txtLastName'];
    if(!empty($_POST['txtEmail'])){
     $email = $_POST['txtEmail'];
     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      if(!empty($_POST['txtAge'])){
       $age = $_POST['txtAge'];
       if(!empty($_POST['rdoGender'])){
        $gender = $_POST['rdoGender'];
        if(!empty($_POST['txtPassword'])){
         $password = $_POST['txtPassword'];
         if(preg_match('/[a-z]/',$password) && preg_match('/[A-Z]/',$password) && preg_match('/[0-9]/',$password)){
          if(!empty($_POST['txtConfPassword'])){
           $confpassword = $_POST['txtConfPassword'];
           if($password === $confpassword){
            if(!empty($_POST['termsCond'])){
             $sql = "insert into customer(customer_id, first_name, last_name, email, age, gender, password) values(null, '$firstname', '$lastname', '$email', '$age', '$gender', '$password')";

            //  mysqli_query($connection, $sql);
            $query = oci_parse($connection, $sql);
            oci_execute($query);
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
        echo "<script>alert(\"please select your gender\")</script>";
       }
      }else{
       echo "<script>alert(\"please enter your age\")</script>";
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