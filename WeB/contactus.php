<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="cont-bg">
    <?php include "include/header.php"; ?>
    <div class="container-fluid">
  <h1 class="text-center pb-6 mt-5" >CONTACT US </h1>
  <div class="col-10 mx-auto">
  <div class="row text-center">
      <div class="col-lg-3 py-2 m-2 mx-auto td-con" style="width: 28rem; background-color: white;">
        <div class="card-body card-body-con">
          <h5 class="card-title">Please fill the form belo!</h5>
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
        <textarea name="message" style="resize: none;" cols="20" rows="5"></textarea>
        <input type="submit" class="btn btn-primary text-white" style="width: 100px;">
        </div>
        </div>
        <div class="col-lg-3 py-2 m-2 mx-auto td-con" style="width: 36rem; background-color:white;">
        <div class="card-body card-body-con text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89978.78192368444!2d-1.8471099331820764!3d53.6565359867975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487962132bcdb7bb%3A0x653c3a498c896a17!2sHuddersfield%2C%20UK!5e0!3m2!1sen!2snp!4v1652099579153!5m2!1sen!2snp" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
  </div>
        </div>
        </div>
<br>
  <?php include "include/footer.php"; ?>
</body>
</html>