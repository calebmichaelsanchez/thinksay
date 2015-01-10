<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css('dist/css/app.css') ?>

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <?php echo js('dist/scripts/libs/tweetie.js') ?>

</head>
<body>
  
  <header>
    <?php snippet('menu') ?>
  </header>
  <div class="page--wrap <?php if ($page->title() == 'About') { echo 'about'; } ?>">