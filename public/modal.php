<div class="modal">
  <div class="close">
    X
  </div>
  <img src="att/mail-icon.svg">
  <p><?=$lines['noticed']?></p>
  <h5><?=$lines['official']?></h5>
  <div class="newsletter-modal">
    <p class="latest-news"><?=strtoupper($lines['latest'])?></p>
    <hr>
    <div class="inputfield">
      <form action="signup.php" method="post">
        <input class="input-modal" type="email" name="" value="" placeholder="<?=$lines['email']?>">
        <button class="button-modal" type="submit" name="button">
          <img src="att/button-arrow.svg">
        </button>
      </form>
    </div>
  </div>
</div>
