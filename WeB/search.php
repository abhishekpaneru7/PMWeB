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
    <div class="hero-image">
        <div class="moto-text">
          <h1>SEARCH ITEMS FOR: </h1>
        </div>
        <div class="search-btn">
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="search.php" type="button search-btn" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </a>
            </form>
        </div>
    </div>
    <?php include "include/footer.php"; ?>
</body>
</html>