<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Blank Template</title>
  <meta name="description" content="Starter files for templating">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Lee Foley">

  <link rel="stylesheet" href="style.css?v=1.0">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/custom.js"></script>
  
</head>

<body>

  <header class="site-header">
    <div class="header-inner">

      <div class="site-logo"><a href="index.php"><img src="images/logoipsum-289.svg"></a></div>
      <a href="#" class="menu-toggle"><img src="images/icons/menu.png"></a>
    </div>
    <nav class="primary">
      <ul>
        <li class="has-children">
          <a href="#">Page Builder Elements</a>
          <ul class="sub-menu">
            <li><a href="textblock.php">Text Block</a></li>
            <li><a href="points-of-interest.php">Points Of Interest</a></li>
            <li><a href="equal-blocks.php">Equal Blocks</a></li>
            <li><a href="accordion-content.php">Accordion</a></li>
            <li><a href="hero.php">Hero</a></li>
            <li><a href="icon-list.php">Icon List</a></li>
            <li><a href="image-callout.php">Image Callout</a></li>
            <li><a href="article-select.php">Article Select</a></li>
          </ul>
        </li>
        <li class="has-children">
          <a href="page2.php">Navigation Link Two</a>
          <ul class="sub-menu">
            <li><a href="#">Sub Link One</a></li>
            <li><a href="#">Sub Link Two</a></li>
            <li><a href="#">Sub Link Three</a></li>
            <li><a href="#">Sub Link Four</a></li>
            <li><a href="#">Sub Link Five</a></li>
            <li><a href="#">Sub Link Six</a></li>
            <li><a href="#">Sub Link Seven</a></li>
          </ul>
        </li>
        <li class="has-children">
          <a href="page3.php">Navigation Link Three</a>
          <ul class="sub-menu">
            <li><a href="#">Sub Link One</a></li>
            <li><a href="#">Sub Link Two</a></li>
            <li><a href="#">Sub Link Three</a></li>
          </ul>
        </li>
        <li class="has-children">
          <a href="page4.php">Navigation Link Four</a>
          <ul class="sub-menu">
            <li><a href="#">Sub Link One</a></li>
            <li><a href="#">Sub Link Two</a></li>
            <li><a href="#">Sub Link Three</a></li>
            <li><a href="#">Sub Link Four</a></li>
          </ul>
        </li>
        <li><a href="#">Navigation Link Five</a></li>
        <li><a href="#">Navigation Link Six</a></li>
      </ul>
    </nav>
  </header>

  <?php include ('includes/key-messages.php'); ?>