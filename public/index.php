<?php
require (__DIR__.'/functions.php');
if (isset($_GET['locale'])){
  $locale = $_GET['locale'];
  require (trans($locale));
}else{
  require (__DIR__.'/lang/en.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Fast Security</title>
</head>
<body>
  <!-- NAV BAR-->
  <header class="navbar-container">
    <div class="invisible" id="invisible">
    </div>
    <nav class="topnav" id="myTopnav">
      <a href="#home">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <a href="javascript:void(0);" class="icon" onclick="addClass(), addClass2()">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
  <!--LANGUAGE BUTTONS-->
  <form method="get">
    <button type="submit" name="locale" value="sv">
      Svenska
    </button>
    <button type="submit" name="locale" value="en">
      English
    </button>
  </form>
  <!-- NAV BAR FURTHER DOWN -->
  <div class="navbar-further-down">
    <div class="navbar-further-down-logo">
      THE LOGO
    </div>
    <div class="navbar-further-down-buttons">
      <ul class="navbar-further-down-list">
        <li><?= strtoupper($lines['newsletter']);?></li>
        <li><?= strtoupper($lines['catalogue']);?></li>
      </ul>
      <div class="nav-space">
      </div>
    </div>
  </div>


  <!--FIRST HERO-->
  <div class="heroes first-hero fade-in-img hero-img img-1"><!-- <img class="hero-img" src="/pictures/1.jpg"> -->
    <div class="hero-text to-fade fade-in">
      <?=nl2br($lines['hero1headline']);?>
    </div>
    <div class="hero-text-desktop to-fade">
      <?=nl2br($lines['hero1paragraph']);?>
    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <div class="hero-text-mobile to-fade">
      <?=nl2br($lines['hero1paragraph']);?>
    </div>
  </div>
  <!--SECOND HERO-->
  <div class="heroes other-hero hero-img fade-in-img img-2">
    <div class="hero-text to-fade">
      <?=nl2br($lines['hero1headline']);?>
    </div>
    <div class="hero-text-desktop to-fade">
      <?=nl2br($lines['hero1paragraph']);?>
    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <div class="between-div">
      <div class="hero-text-mobile to-fade">
        <?=nl2br($lines['hero1paragraph']);?>
      </div>
    </div>
  </div>
  <!--THIRD HERO-->
  <div class="heroes last-hero fade-in-img hero-img img-3">
    <div class="hero-text to-fade">
      <?=nl2br($lines['hero1headline']);?>
    </div>
    <div class="hero-text-desktop to-fade">
      <?=nl2br($lines['hero1paragraph']);?>
    </div>
  </div>
  <div class="between-div">
    <div class="between-div">
      <div class="hero-text-mobile to-fade">
        <?=nl2br($lines['hero1paragraph']);?>
      </div>
    </div>
  </div>
  <!--SCRIPT TAG-->
  <script type="text/javascript" src=index.js>

  </script>
</body>
</html>
