<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #6351ce;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/Logo-Poppins-White.png" alt="logo" width="" height="50px" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link btn btn-dark btn-nav" aria-current="page" href="index.php" style="color: white;" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'">Home</a>
              </li>
              &nbsp;
              <li class="nav-item">
                <a class="nav-link btn btn-dark btn-nav" aria-current="page" href="shop.php" style="color: white;" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'">Shop</a>
              </li>
              &nbsp;
              <li class="nav-item">
                <a class="nav-link btn btn-dark btn-nav" aria-current="page" href="aboutus.php" style="color: white; margin-right: %;" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'">About Us</a>
              </li>
              &nbsp;
              <a href="cart.php" class="btn btn-dark btn-nav text-center" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'"><i class="bi bi-cart2"></i></a>
              &nbsp;
              <?php
              if (empty($_SESSION['users'])){
                ?>
              <a href="login.php" class="btn btn-dark btn-nav text-center" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'"><i class="bi bi-person"></i></a>
              &nbsp;
              <?php
              }if($_SESSION['role']=='Customer'){
                ?>
                <a href="profilecustomerform.php" class="btn btn-dark btn-nav text-center" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'"><i class="bi bi-person"></i></a>
              &nbsp;
              <?php }
                else{?>
                &nbsp;
                <a href="signout.php" class="btn btn-dark btn-nav text-center" onMouseOver="this.style.color='#E09C78'" onMouseOut="this.style.color='white'">Sign Out</a>
                <?php } ?>
                
             
            
            </ul>
          </div>
        </div>
      </nav>
      <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </footer>
</body>
<br>
<br>
<br>
</html>