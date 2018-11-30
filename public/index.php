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
<html lang="<?=$lines['lang'];?>" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main-style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/style-mobile.css">
  <link rel="stylesheet" href="css/actions.css">
  <link rel="stylesheet" href="css/sticky-navbar.css">
  <link rel="stylesheet" href="css/drop-down.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/modal-mobile.css">
  <title><?=$lines['fastsecurity']?></title>

</head>
<body>
  <!--NAVBAR-->
  <?php
  require (__DIR__.'/header.php');
  ?>

  <!--DROP IN-->
    <?php require(__DIR__.'/burger-menu.php'); ?>
  <!-- STICKY NAVBAR FURTHER DOWN-->
    <?php require(__DIR__.'/sticky-navbar.php'); ?>
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
  <div class="margin-top">

  </div>
  <!--FIRST HERO -->
  <div class="hero first-hero">
    <div class="hero-headline">
      <h5><?=$lines['headline']?></h5>
      <p><?=strtoupper($lines['fastsecurity'])?></p>
    </div>
    <div class="arrow-down jumping">
      <img src="att/arrow-dropdown.svg" alt="">
    </div>
  </div>
  <!--BETWEEN DIV-->
  <div class="between-div">
    <p class="first-between-div-p"><?=$lines['hero1paragraph']?></p>
    <h5><?=$lines['hero1headline']?></h5>
    <p class="first-between-div-p-2"><?=$lines['hero1paragraph2']?></p>

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

  </div>
  <div class="grid-text grid-image-text-top">
    <div class="grid-holder">
      <h5><?=$lines['interior']?></h5>
      <p><?=$lines['interior-text']?></p>
      <div class="grid-text-button">
        <button type="button" name="button"><?=$lines['read-more'];?></button>
      </div>
    </div>
  </div>
  <div class="grid-text grid-image-text-middle">
    <div class="grid-holder">
      <h5><?=$lines['gear']?></h5>
      <p><?=$lines['gear-text']?></p>
      <div class="grid-text-button">
        <button type="button" name="button"><?=$lines['read-more'];?></button>
      </div>
    </div>
  </div>
  <div class="grid-image grid-image-middle">

  </div>
  <div class="grid-image grid-image-bottom">

  </div>
</div>
<!--BETWEEN DIV-->
<div class="between-div third-between">
  <p class="second-between-div-p"><?=$lines['history']?>
  </p>
</div>
<!--THIRD HERO-->
<div class="hero third-hero">
</div>
<!--FOURTH HERO-->
<div class="hero fourth-hero">
</div>
<?php
require (__DIR__.'/footer.php');
