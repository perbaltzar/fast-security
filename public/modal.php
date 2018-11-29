<div class="modal">
  <div class="close">
    <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
        <title>Header Menu</title>
        <desc>Created with Sketch.</desc>
        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
            <g id="Mobile/Header/Close" transform="translate(-331.000000, -16.000000)" stroke="#FFFFFF">
                <g id="Header-Menu" transform="translate(332.000000, 17.000000)">
                    <g id="Mobile/Icon/Close">
                        <g id="Menu-Bar-Close">
                            <path d="M18.5,8.25 L-2.5,8.25" id="Line-2" stroke-width="2" transform="translate(8.000000, 8.050000) rotate(-45.000000) translate(-8.000000, -8.050000) "></path>
                            <path d="M18.5,8.25 L-2.5,8.25" id="Line-1" stroke-width="2" transform="translate(8.000000, 8.050000) rotate(45.000000) translate(-8.000000, -8.050000) "></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>
  </div>
  <img src="att/mail-icon.svg">
  <p class="modal-notice"><?=$lines['noticed']?></p>
  <h5 class="modal-headline"><?=$lines['official']?></h5>
  <div class="modal-newsletter">
    <p class="modal-latest-news"><?=strtoupper($lines['latest'])?></p>
    <div class="modal-inputfield">
      <form class="modal-inputfield-form" action="signup.php" method="post">
        <input class="modal-input" type="email" name="" value="" placeholder="<?=$lines['email']?>">
        <button class="modal-button" type="submit" name="button">
          <img src="att/button-arrow.svg">
        </button>
      </form>
    </div>
  </div>
</div>
