<? include 'connection.php'; ?>

<body>    
    <form action="" method="get/post" class="forms">
    
        <fieldset class="border rounded-3 p-3 mt-5">
            <legend class="float-none w-auto px-3"><h1>Password Reset</h1></legend>
            <div class="forms-content">
                <h2>Please fill out the form below!</h2>
                <br>
                <input type="email" name="" class="forms-control text-center" placeholder="Please enter your registered email here!">
                <!-- <input type="text" name="" class="forms-control text-center" placeholder="Whatever else is needed.. Here !!"> -->
                <br>
                <input type="submit" value="Reset" name="btnreset" class="btn btn-danger btn-card text-white"><br>
            </div>
        </fieldset>
    </form>
</body>
<?php
if(isset($_POST['btnreset'])){
    $email = $_POST['txtEmail'];
 
        $sender= "chflocalmart@gmail.com";
        $to=$email;
        $subject ="Trader Activation Email";
        $message ="<h2>Click <a href='http://localhost/pm/PMWeB/WeB/verifyTrader.php?fname=$firstname'>Activate</a> to approve Trader </h2> ";
        $headers = "From: CHFLOCALMART  <" . $sender . ">\n" ;
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        $headers .= "Return-Path: " . $sender . "\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        if(mail($to,$subject,$message, $headers))
        {
            echo "<script>alert(\"Verification Request Sent\");";
            echo "window.location.href=\"./index.php\"";
            echo "</script>";
        }
        else{
            echo "<script>alert(\"Unregister Email.\");";
        }
    }
}

?>