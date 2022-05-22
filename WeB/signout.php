<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHF Login Page</title>
</head>
<body>
    
    <?php 
    if(empty($_SESSION['users'])){
        include "include/header.php"; }
     elseif($_SESSION['role']=='Customer'){
        include "include/customerheader.php";}
      else{
        include "include/traderheader.php";
          }
    include "./include/logout.php";
    include "./include/footer.php";
?>
</body>