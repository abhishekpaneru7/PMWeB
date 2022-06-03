<?php
    $id = $_POST['id'];         //customer id
    $pay = $_POST['total'];         //total amount to be paid
?>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST" id="buyCredits" name="buyCredits">
    <input type="hidden" name="business" value="sb-vo4ti16674363@personal.example.com" />
    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="amount" value="<?php echo $pay;?>" />
    <input type="hidden" name="currency_code" value="GBP" />
    <input type="hidden" name="return" value="https://localhost/PMWEB/WeB/paymentsuccess.php?id='<?php echo $id; ?>'" />
</form>

<script>
    document.getElementById("buyCredits").submit();
</script>