<!--FOOTER-->
<div class="footer">
  <div class="footer-newsletter-brochure">
    <p><?=strtoupper($lines['latest'])?></p>
    <div class="footer-inputfield">
      <form action="signup.php" method="post">
        <input class="footer-email-input" type="email" name="email" value="" placeholder="<?=$lines['email']?>">
        <button class="footer-newsletter-button" type="submit">
        <svg viewBox="0 0 24 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
              <title>Arrow</title>
              <desc>Created with Sketch.</desc>
              <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Popup_mobile" transform="translate(-244.000000, -314.000000)" fill-rule="nonzero">
                      <g id="Arrow" transform="translate(244.000000, 315.000000)">
                          <rect id="Rectangle" fill="#FFFFFF" x="0" y="4" width="23" height="1"></rect>
                          <polyline id="Path-4" stroke="#FFFFFF" points="19 0.0739715499 23.4946565 4.56862805 19 9.06328455"></polyline>
                      </g>
                  </g>
              </g>
          </svg>
        </button>
      </form>
    </div>

    <a href="downloads/brochure.pdf" download>
    <button class="footer-brochure-button" name="button">
      <?=strtoupper($lines['download'])?>
    </button>
  </a>

  </div>
  <div class="footer-logo">
    <img src="att/logo/logotyp-smallcaps.svg">
  </div>
  <div class="footer-buttons">
    <div class="footer-contact footer-button">
      <?=strtoupper($lines['contact'])?>
    </div>
    <div class="footer-newsletter line-left footer-button">
      <?=strtoupper($lines['newsletter'])?>
    </div>
    <div class="footer-brochure line-left footer-button">
      <a href="/downloads/brochure.pdf" download><?=strtoupper($lines['brochure'])?></a>
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
<script type="text/javascript" src="javascript/script.js">

</script>
</body>
</html>
