<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description" content="<?= (isset($meta_description)) ? $meta_description : ""; ?>">
   <meta name="keywords" content="<?= (isset($meta_keyword)) ? $meta_keyword : ""; ?>">
   <?php
   if (isset($meta_title)) {
      echo "<title>$meta_title</title>";
   } else {
      echo "<title>SISTec-GN</title>";
   }
   ?>

   <link rel="shortcut icon" href="<?= base_url("assets/web/images/others/sistec-favicon.png") ?>" type="image/png" />
   <link rel="canonical" href="">

   <!-- Open Graph Meta -->
   <meta property="og:site_name" content="">
   <meta property="og:type" content="">
   <meta property="og:title" content="">
   <meta property="og:description" content="">
   <meta property="og:url" content="">
   <meta property="og:image" content="">

   <!-- Twitter Meta -->
   <meta name="twitter:card" content="">
   <meta name="twitter:site" content="">
   <meta name="twitter:title" content="">
   <meta name="twitter:description" content="">
   <meta name="twitter:image" content="">

   <!-- CSS -->
   <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/fontawesome.all.min.css") ?>">
   <link rel="stylesheet" href="<?= base_url("assets/web/css/bootstrap.min.css") ?>">
   <link rel=" stylesheet" href="<?= base_url("assets/web/css/webstyle.min.css") ?>">
   <link rel=" stylesheet" href="<?= base_url("assets/web/css/jquery.fancybox.min.css") ?>">

   <!-- Slick CSS -->
   <link rel=" stylesheet" href="<?= base_url("assets/common/css/slick.css") ?>">
   <link rel=" stylesheet" href="<?= base_url("assets/common/css/slick-theme.css") ?>">
   <link rel=" stylesheet" href="<?= base_url("assets/common/css/swiper-bundle.min.css") ?>">
</head>

<body>

   <?php
   require_once("web-navigation.php");
   require_once("mobile-navigation.php");
   ?>