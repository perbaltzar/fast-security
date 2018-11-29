<!--NAV BAR-->
<header class="main-navbar">
  <div class="navbar-container">
    <img class="navbar-logo" src="att/logo/logotyp-header.svg"/>

    <div class="nav-items">
      <h2 class="nav-contact nav-item"><?=$lines['contact']?></h2>
      <h2 class="nav-newsletter nav-item go-to-bottom"><?=$lines['newsletter']?></h2>
      <h2 class="nav-brochure nav-item">
        <a href="downloads/brochure.pdf" download>
          <?=$lines['brochure']?>
        </a>
      </h2>
      <h2 class="nav-about nav-item"><?=$lines['about']?></h2>
      <form class="nav-item" method="get">
        <?php
        if (isset($_GET['locale'])){
          if ($locale === 'sv'){ ?>
            <button class="lang-button" type="submit" name="locale" value="en"><?=$lines['english'];?></button>
          <?php
          }else{
          ?>
            <button class="lang-button" type="submit" name="locale" value="sv"><?=$lines['swedish'];?></button>
          <?php
          }
        }else{?>
        <button class="lang-button" type="submit" name="locale" value="sv"><?=$lines['swedish'];?></button>
      <?php
      }
      ?>

      </form>
    </div>
    <div class="burger-container">
      <div class="burger"></div>
      <div class="burger"></div>
      <div class="burger"></div>
    </div><!--/Burger Container-->

  </div>
</header>
