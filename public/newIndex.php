<?php
//Function for determing the launguage
require (__DIR__.'/functions.php');
if (isset($_GET['locale'])){
  $locale = $_GET['locale'];
  require (trans($locale));
}else{
  require (__DIR__.'/lang/en.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="newStyle.css">
  <link rel="stylesheet" href="newStyleMobile.css">
  <link rel="stylesheet" href="actions.css">
  <link rel="stylesheet" href="sticky-navbar.css">
  <link rel="stylesheet" href="drop-down.css">
  <link rel="stylesheet" href="modal.css">
  <title>Fast Security 1.0</title>

</head>
<body><!--NAV BAR-->
  <header class="main-navbar">
    <div class="navbar-container">
      <img class="navbar-logo" src="att/saab-logo.png"/>
      <h2 class="nav-contact nav-item">Contact</h2>
      <h2 class="nav-newsletter nav-item">Newsletter</h2>
      <h2 class="nav-brochure nav-item">Brochure</h2>
      <h2 class="nav-about nav-item">About</h2>
      <div class="burger-container">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
      </div><!--/Burger Container-->

    </div>
  </header>
  <!--DROP IN-->
  <div class="drop-in">
    <div class="drop-down-contact drop-down-item">
      CONTACT
    </div>
    <div class="drop-down-newsletter drop-down-item">
      NEWSLETTER
    </div>
    <div class="drop-down-brochure drop-down-item">
      BROCHURE
    </div>
    <div class="drop-down-about drop-down-item">
      ABOUT
    </div>
    <div class="lang-buttons">
      <form method="get">
        <button type="submit" name="locale" value="en">ENGLISH</button>
        <button type="submit" name="locale" value="sv">SWEDISH</button>
      </form>
    </div>
    <div class="drop-down-social">
      <img src="att/facebook-icon.svg">
      <img src="att/linkedin-icon.svg">
      <img src="att/twitter-icon.svg">
    </div>

  </div>
  <!-- STICK/ NAVBAR FURTHER DOWN-->
  <div class="navbar-further-down">
    <div class="navbar-further-down-logo">
      <img class="navbar-logo" src="att/saab-logo.png"/>
    </div>
    <div class="navbar-further-down-buttons">
        <button class="navbar-further-down-button">GET THE LATEST NEWS</button>
    </div>
  </div>
  <!--POP UP-->
  <?php
  require(__DIR__.'/popup.php');
  ?>
  <!--FIRST HERO -->
  <div class="hero first-hero">
    <div class="hero-headline">
      <h5><?=$lines['headline']?></h5>
      <p>FAST SECURITY 1.0</p>
    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <p><?=$lines['hero1paragraph']?></p>
    <h5><?=$lines['hero1headline']?></h5>
    <p><?=$lines['hero1paragraph2']?></p>

  </div>
  <!--SLIDER SECOND HERO-->
  <div class="hero second-hero slider">

  </div>
  <!--DOUBLE PICTURE-->
  <div class="two-pictures">
    <div class="side-by-side left-image">

    </div>
    <div class="side-by-side right-image">

    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <p>Saab started life in 1937 in Trollhättan, Sweden,
      as an aeroplane manufacturer to provide aircraft for the Swedish Air Force,
      just as Europe was steeling itself for another war.
      The company's full name was Svenska Aeroplan Aktiebolaget, giving the world the acronym Saab.
      The head office soon moved to the Swedish university town of Linköping,
      where this massive company has its largest operation today.
      Today we are starting a new chapter. Fast Security, FS. Is the future car.
    </p>
  </div>
  <!--THIRD HERO-->
  <div class="hero third-hero">
  </div>
<?php
require (__DIR__.'/footer.php');
