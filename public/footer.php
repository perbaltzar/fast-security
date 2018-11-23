<!--FOOTER-->
<div class="footer">
  <div class="newsletter-brochure">
    <p><?=strtoupper($lines['latest'])?></p>
    <div class="inputfield">
      <form action="signup.php" method="post">
        <input class="email-input" type="email" name="email" value="" placeholder="<?=$lines['email']?>">
        <button class="newsletter" type="submit" action="signup.php">
          <img src="att/button-arrow.svg">
        </button>
      </form>
    </div>
    <button class="brochure" type="button" name="button">
      <?=strtoupper($lines['download'])?>
    </button>
  </div>
  <div class="footer-logo">
    <img src="att/saab-logo.png">
  </div>
  <div class="footer-buttons">
    <div class="footer-contact footer-button">
      <?=strtoupper($lines['contact'])?>
    </div>
    <div class="footer-newsletter line-left footer-button">
      <?=strtoupper($lines['newsletter'])?>
    </div>
    <div class="footer-brochure line-left footer-button">
      <?=strtoupper($lines['brochure'])?>
    </div>
    <div class="footer-about line-left footer-button">
      <?=strtoupper($lines['about'])?>
    </div>
  </div>
  <div class="footer-line">
  </div>
  <div class="social-media">
    <img src="att/facebook-icon.svg">
    <img src="att/linkedin-icon.svg">
    <img src="att/twitter-icon.svg">
  </div>
  <div class="footer-copywrite">
    © 2019 FastSecurity
  </div>
</div>
<script type="text/javascript">
let open_the_modal = false;
<?php
if (isset($_COOKIE['hasVisit'])):
  if (!isset($_COOKIE['hasSignUp'])): ?>
    open_the_modal = true;
  <?php
  endif;
endif;
?>

</script>
<script type="text/javascript" src="script.js">

</script>
</body>
</html>
