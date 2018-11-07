<?php
require (__DIR__.'/functions.php');
if (isset($_GET['locale'])){
  $locale = $_GET['locale'];
  require (trans($locale));
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
<body class="">
  <!-- MODAL -->
  <div class="modal-background">
  </div>
  <div class="modal">
    <h1><?= $lines['greeting'];?></h1>
  </div>
  <div style="height: 20vh;">
  </div>
  <!-- NAV BAR-->
<header>
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




  <center>
    <h1 class="headline">This is a Headline</h1>
  </center>
  <form method="get">

  <button type="submit" name="locale" value="sv">
    Svenska
  </button>
</form>

  <!--SCRIPT TAG-->
  <script type="text/javascript" src=index.js>

  </script>
</body>
</html>
