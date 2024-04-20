<?php
$lang = $_COOKIE['lang'] ?? null;
$csfrToken = $params['csfr'] ?? null;
?>

<div class="container-fluid sc-bg">
  <?php include('./app/Views/public/includes/Header.php') ?>
  <?php include('./app/Views/public/includes/Counter.php') ?>
  <?php include('./app/Views/public/includes/Films.php') ?>
  <?php include('./app/Views/public/includes/Timeline.php') ?>
  <?php include('./app/Views/public/includes/Gift.php') ?>
  <?php include('./app/Views/public/includes/Register.php') ?>
  <?php include('./app/Views/public/includes/Mosaic.php') ?>
  <?php include('./app/Views/public/includes/Useful_Infos.php') ?>
  <?php include('./app/Views/public/includes/Map.php') ?>
</div>