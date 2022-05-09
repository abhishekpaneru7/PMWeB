<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "include/header.php"; ?>
    <br>
    <br>
    <br>
    <div class="container-fluid">
  <h1 class="text-center pb-6 mt-5" ></h1>
  <div class="col-8 mx-auto">
  <div class="row text-center">
      <div class="col-lg-4 py-2 m-2 mx-auto td-con" style="width: 28rem;">
        <div class="card-body card-body-con">
          <h5 class="card-title">Contact Us!</h5>
          <br>
          <div class="name-f pb-3">
        <label for="name">Name: </label>
        <input type="text" placeholder="Your Name Here" class="text-center">
        </div>
        <div class="email-f mt-1 pb-2">
        <label for="email">Email: </label>
        <input type="email" placeholder="Your Email Here" class="text-center">
        </div>
        <label for="message">Message: </label>
        <textarea name="message" cols="20" rows="5"></textarea>
        <input type="submit" class="btn btn-primary text-white" style="width: 100px;">
        </div>
      </div>
    </div>
  </div>
</div>
<br>
    <?php include "include/footer.php"; ?>
</body>
</html>