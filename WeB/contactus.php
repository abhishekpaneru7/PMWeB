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
    <div class="contact-con">
        <label for="name">Name: </label>
        <input type="text" placeholder="Your Name Here" size="25">
        <label for="email">Email: </label>
        <input type="email" placeholder="Your Email Here" size="30">
        <label for="message">Message: </label>
        <textarea name="message" cols="50" rows="5"></textarea>
        <input type="submit">
    </div>
    <?php include "include/footer.php"; ?>
</body>
</html>