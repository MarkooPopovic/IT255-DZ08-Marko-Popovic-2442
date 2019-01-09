<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
    crossorigin="anonymous">
    <title>MetHotel | <?php echo $title; ?></title>
</head>

<body>
  <header class="site-header container">
    <div class="row justify-content-between">
      <div class="col-8 offset-2 col-lg-4 offset-lg-0">
        <a href="index.php">
          <!-- <img src="img/logo.svg" class="img-fluid mx-auto d-block"> -->
          <h1 class="display-3">MetHotel</h1>
        </a>
      </div>
      <div class="col-12 col-lg-4">
        <nav class="socials">
          <ul>
            <li><a href="http://facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li><a href="http://twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://instagram.com"> <i class="fab fa-instagram"></i></a></li>
            <li><a href="http://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="http://youtube.com"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>

  <div class="container">
  <div class="row inline-block">

  <?php
    if (isset($_SESSION['u_id'])) {
      echo '<form action="includes/logout.inc.php" method="POST">
              <button type="submit" name="submit">Logout</button>
            </form>';
    }else {
      echo '<form class="navbar-form navbar-right" action="includes/login.inc.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="uid" placeholder="Username/e-mail">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Password">
              </div>
            <button type="submit" name="submit" class="btn btn-default">Login</button>
              <a href="signup.php">Sign Up</a>
            </form> ';
    }
  ?>
  </div>
</div>
</header>
