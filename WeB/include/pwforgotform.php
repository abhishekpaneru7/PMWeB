<? include 'connection.php'; ?>

<body>    
    <form action="" method="POST" class="forms">
    
        <fieldset class="border rounded-3 p-3 mt-5">
            <legend class="float-none w-auto px-3"><h1>Password Reset</h1></legend>
            <div class="forms-content">
                <h2>Please fill out the below!</h2>
                <br>
                <input type="email" name="email" class="forms-control text-center" placeholder="Please enter your registered email here!">
                <!-- <input type="text" name="" class="forms-control text-center" placeholder="Whatever else is needed.. Here !!"> -->
                <br>
                <input type="submit" value="Submit" name="btnsubmit" class="btn btn-danger btn-card text-white"><br>
            </div>
        </fieldset>
    </form>
</body>
<?php
if(isset($_POST['btnsubmit'])){
    $emailsent = $_POST['email']; 
    $emailverify = "SELECT * FROM CUSTOMER WHERE email = '$emailsent'";
     $select = oci_parse($connection, $emailverify);
     oci_execute($select, OCI_NO_AUTO_COMMIT);
     $rows = oci_fetch_all($select, $res);
     if ($rows > 0) {  
       $sender= "chflocalmart@gmail.com";
        $to= $emailsent;
        $subject ="Password change Email";
        // echo "<p>Your account : ".$email." recently requested for password reset.</p>";
        // <p>Please click the link below to reset your password.</p>     
        $message ="<h2>Click <a href='http://localhost/pm/PMWeB/WeB/changePassword.php?email=$emailsent'>RESET YOUR PASSWORD</a> to change password </h2> ";
        $headers = "From: CHFLOCALMART  <" . $sender . ">\n" ;
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        $headers .= "Return-Path: " . $sender . "\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        if(mail($to,$subject,$message, $headers))
        {
            echo"Verification Sent";
            // echo "<script>alert(\"Verification Request Sent\");";
            // echo "window.location.href=\"./index.php\"";
            // echo "</script>";
        }
    }
        else{
            echo"unregistered email";
            // echo "<script>alert(\"Unregister Email.\");";
        }
    }
    else{
        echo "<script>alert(\"Please enter your registered Email.\");";
    }
 
?>