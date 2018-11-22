<?php

declare(strict_types=1);

if (isset($POST['email'])){
  $email = $POST['email'];
  $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    //storing the email in a database
  }
}



if (!isset($_COOKIE['hasSignUp'])){
  setcookie("hasSignUp", '1' ,time()+60*60*24*365);
}

header ('Location: index.php');
?>
