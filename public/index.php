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
  <link rel="stylesheet" href="main-style.css">
  <link rel="stylesheet" href="style-mobile.css">
  <link rel="stylesheet" href="actions.css">
  <link rel="stylesheet" href="sticky-navbar.css">
  <link rel="stylesheet" href="drop-down.css">
  <link rel="stylesheet" href="modal.css">
  <link rel="stylesheet" href="modal-mobile.css">
  <title><?=$lines['fastsecurity']?></title>

</head>
<body>
  <!--NAVBAR-->
  <?php
    require (__DIR__.'/header.php');
  ?>

  <!--DROP IN-->
  <div class="drop-in">
    <div class="drop-down-contact drop-down-item">
      <?=strtoupper($lines['contact'])?>
    </div>
    <div class="drop-down-newsletter drop-down-item go-to-bottom">
      <?=strtoupper($lines['newsletter'])?>
    </div>
      <a href="downloads/catalogue.txt" download>
        <div class="drop-down-brochure drop-down-item">
          <?=strtoupper($lines['brochure'])?>
        </div>
      </a>
    <div class="drop-down-about drop-down-item">
      <?=strtoupper($lines['about'])?>
    </div>
    <div class="lang-buttons">
      <form method="get">
        <button type="submit" name="locale" value="en"><?=strtoupper($lines['english'])?></button>
        <button type="submit" name="locale" value="sv"><?=strtoupper($lines['swedish'])?></button>
      </form>
    </div>
    <div class="drop-down-social">
      <img src="att/facebook-icon.svg">
      <img src="att/linkedin-icon.svg">
      <img src="att/twitter-icon.svg">
    </div>
  </div>
  <!-- STICKY NAVBAR FURTHER DOWN-->
  <div class="navbar-further-down">
    <div class="navbar-further-down-logo">
      <img class="navbar-logo" src="att/saab-logo.png"/>
    </div>
    <div class="navbar-further-down-buttons">
        <button class="navbar-further-down-button go-to-bottom"><?=strtoupper($lines['latest'])?></button>
    </div>
  </div>
  <!--MODAL POPUP-->
  <div class="modal-container">
  <?php
  /////////////////////////////////////
  //Checking if user been here before//
  /////////////////////////////////////
  if (isset($_COOKIE['hasVisit'])){
    if (!isset($_COOKIE['hasSignUp'])){
      require(__DIR__.'/modal.php');
    }
  }else{
    setcookie("hasVisit", '1' ,time()+60*60*24*365);
  }
  ?>
  </div>
  <!--FIRST HERO -->
  <div class="hero first-hero">
    <div class="hero-headline">
      <h5><?=$lines['headline']?></h5>
      <p><?=strtoupper($lines['fastsecurity'])?></p>
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
    <!-- <section>
      <img src="pictures/tunnel-woman.jpg">
    </section>
    <section>
      <img src="pictures/dark-studio-front.jpg">
    </section> -->
  </div>
  <!--DOUBLE PICTURE GRID-->
  <div class="grid-pictures">
    <div class="grid-image grid-image-top">
      <img src="pictures/3.jpg">
    </div>
    <div class="grid-text grid-image-text-top">
        <p>TEXT 1</p>
    </div>
    <div class="grid-text grid-image-text-middle">
      <p>TEXT 2</p>
    </div>
    <div class="grid-image grid-image-middle">
        <img src="pictures/3.jpg">
    </div>
    <div class="grid-image grid-image-bottom">
      <img src="pictures/3.jpg">
    </div>
    <div class="grid-text grid-image-text-bottom  ">
      <p>TEXT 3</p>
    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <p><?=$lines['history']?>
    </p>
  </div>
  <!--THIRD HERO-->
  <div class="hero third-hero">
  </div>
<?php
require (__DIR__.'/footer.php');
