<!--NAV BAR-->
<header class="main-navbar">
  <div class="navbar-container">
    <img class="navbar-logo" src="att/saab-logo.png"/>
    <div class="nav-items">
      <h2 class="nav-contact nav-item"><?=$lines['contact']?></h2>
      <h2 class="nav-newsletter nav-item go-to-bottom"><?=$lines['newsletter']?></h2>
      <h2 class="nav-brochure nav-item">
        <a href="downloads/catalogue.txt" download>
          <?=$lines['brochure']?>
        </a>
      </h2>
      <h2 class="nav-about nav-item"><?=$lines['about']?></h2>
      <form class="nav-item" method="get">
        <?php
        if (isset($_GET['locale'])){
          if ($locale === 'sv'){ ?>
            <button type="submit" name="locale" value="en"><?=strtoupper($lines['english'])?></button>
          <?php
          }else{
          ?>
            <button type="submit" name="locale" value="sv"><?=strtoupper($lines['swedish'])?></button>
          <?php
          }
        }else{?>
        <button type="submit" name="locale" value="sv"><?=strtoupper($lines['swedish'])?></button>
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
