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
<header  class="navbar-container">
  <nav class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </nav>
</header>
<!-- NAV BAR FURTHER DOWN -->
<div class="navbar-further-down">
  <div class="navbar-further-down-logo">
    THE LOGO
  </div>
  <div class="navbar-further-down-buttons">
    <ul class="navbar-further-down-list">
      <li>Catalogue</li>
      <li>Newsletter</li>
    </ul>
  </div>
</div>

  <!--LANGUAGE BUTTONS-->
  <form method="get">
    <button type="submit" name="locale" value="sv">
      Svenska
    </button>
    <button type="submit" name="locale" value="en">
      English
    </button>
</form>
<div class="first-hero">
  <img class="hero-img" src="/pictures/1.jpg">

</div>
<center>
  <h1 class="headline"><?= $lines['greeting'];?></h1>
</center>

  <!--SCRIPT TAG-->
  <script type="text/javascript" src=index.js>

  </script>
</body>
</html>
