<div class="drop-in">
  <div class="drop-down-contact drop-down-item">
    <?=strtoupper($lines['contact'])?>
  </div>
  <div class="drop-down-newsletter drop-down-item go-to-bottom">
    <?=strtoupper($lines['newsletter'])?>
  </div>
  <a href="downloads/brochure.pdf" download>
    <div class="drop-down-brochure drop-down-item">
      <?=strtoupper($lines['brochure'])?>
    </div>
  </a>
  <div class="drop-down-about drop-down-item">
    <?=strtoupper($lines['about'])?>
  </div>
  <div class="lang-buttons">
    <form method="get">
      <button type="submit" name="locale" value="en"><?=strtoupper($lines['en-mobile'])?></button>
      <button type="submit" name="locale" value="sv"><?=strtoupper($lines['sv-mobile'])?></button>
    </form>
  </div>
  <div class="drop-down-social">
    <img src="att/facebook-icon.svg">
    <img src="att/linkedin-icon.svg">
    <img src="att/twitter-icon.svg">
  </div>
</div>
