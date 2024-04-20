<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="noindex" />
  <meta name="robots" content="nofollow" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="public/css/index.css?v=<?= time() ?>">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Esküvő</title>
</head>

<body>
  <?php include 'app/Views/public/components/Navbar.php' ?>
  <?php include 'app/Views/public/components/Alert.php' ?>
  <?php if (COOKIE_MODAL_PERM === 1) : ?>
    <?php include 'app/Views/public/components/Cookie.php' ?>
  <?php endif ?>

  <?= $params["content"] ?>

  <?php include 'app/Views/public/components/Footer.php' ?>




  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="public/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="public/js/getCookie.js"></script>
  <script src="public/js/validators.js"></script>
  <script src="public/js/countdown.js"></script>
  <script src="public/js/alert.js"></script>
  <script src="public/js/inputAnimation.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init()
  </script>
</body>

</html>