<?php 
include 'include/connection.php';
$emailsent=$_GET['email'];
echo $email;
// echo "RESET YOU PASSWORD";
?>

<body>    
    <form action="" method="get/post" class="forms">
    
        <fieldset class="border rounded-3 p-3 mt-5">
            <legend class="float-none w-auto px-3"><h1>Password Reset</h1></legend>
            <div class="forms-content">
                <h2>Please change you passowrd!</h2>
                <br>
                <input type="email" name="txtEmail" class="forms-control text-center" placeholder="Please enter your registered email here!">
                <input type="text" name="" class="forms-control text-center" placeholder="Confirm Password">
                <br>
                <input type="submit" value="Reset" name="btnsubmit" class="btn btn-danger btn-card text-white"><br>
            </div>
        </fieldset>
    </form>
</body>