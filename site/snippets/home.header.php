<?php
  // check for optionable variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = null; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif; // used in opening main block
?>

<header class="header header--home u-dark" role="banner">
  <div class="u-vcenter">
    <div class="u-row u-left--center">

      <div class="header__container">

        <h1 class="header__headline">
          <?php if($page->headline() != ''): echo $page->headline(); else: echo $site->title(); endif; ?>
        </h1>

      <?php if($page->subhead() != ''): ?>
        <p class="header__subhead">
          <?php echo $page->subhead() ?>
        </p>
      <?php endif; ?>

      </div>

    </div>
  </div>
  <div class="header__graphic header__graphic--left" data-stellar-ratio="0.65"></div>
  <div class="header__graphic header__graphic--right" data-stellar-ratio="1.25"></div>
</header>

<div class="home_triangle"></div>

<main role="main" class="main <?php echo $depth . ' ' . $theme ?>">
