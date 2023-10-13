<?php

  // main menu items
  $items = $pages->visible()->not('papers');

  // text that applies next to menu icon
  $menutext = 'menu';

  // check for optionable variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = 'u-front'; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

?>

<div class="nav_container <?php echo $depth . ' ' . $theme ?>">
  <nav class="u-row nav_main" role="navigation">

    <!-- logo -->
    <a class="nav_logo" href="<?php if($page->isHomePage()): echo '#top'; else: echo url(); endif ?>">
      <div class="nav_logo__img<?php if($page->isHomePage()): echo ' is-active_page'; endif ?>">
        <span class="u-screenreader">
          <?php echo $site->title(); if($site->tagline() != ''): echo ': ' . $site->tagline(); endif; ?>
        </span>
      </div>
    </a>

    <!-- nav toggle -->
    <a class="js-nav_toggle nav_toggle" href="#nav__menu">
      <div class="js-nav_hamburger nav_hamburger is-inactive">
        <span class="nav_hamburger__bun nav_hamburger__bun--top"></span>
        <span class="nav_hamburger__bun nav_hamburger__bun--patty"></span>
        <span class="nav_hamburger__bun nav_hamburger__bun--bottom"></span>
      </div>
      <span class="nav_toggle__text"><?php echo $menutext ?></span>
    </a>

    <!-- main nav -->
    <ul class="nav_main__list js-nav__main is-collapsed" role="group">

    <?php foreach($items as $item): ?>

      <li class="nav_main__item<?php if (($item->hasChildren()) && (in_array($item->uri(), $site->dropdownable()->yaml()))): echo ' has-dropdown'; endif; ?>" role="menuitem">
        <a <?php if($items->first()->title() == $item->title()): echo 'id="nav__menu " '; endif ?>class="nav_main__link <?php e($item->isOpen(), 'is-active_page') ?>" href="<?php if($item->isOpen() && ($page->slug() == $item->slug())): echo '#top'; else: echo $item->url(); endif ?>">
          <?php echo $item->title(); if(strtolower($item->title()) == 'about'): echo '<span class="u-screenreader"> ' . $site->title() . '</span>'; endif; ?>
        </a>

        <!-- dropdown, checked against $site->dropdownable() list -->
        <?php if (($item->hasChildren()) && (in_array($item->uri(), $site->dropdownable()->yaml()))): ?>

        <!-- dropdown list -->
        <ul class="nav_dropdown__list" role="group" aria-label="submenu">

        <?php foreach($item->children()->visible() as $child): ?>
          <li class="nav_dropdown__item" role="menuitem">
            <a class="nav_dropdown__link<?php e($child->isOpen(), ' is-active_page') ?>" href="<?php if($child->isOpen() && ($page->slug() == $child->slug())): echo '#top'; else: echo $child->url(); endif ?>" role="menuitem" aria-haspopup="true">
              <?php echo $child->title() ?>
            </a>
          </li>

          <!-- l3 page dropdown, checked against $site->lv3dropdown() -->
          <?php if($child->hasChildren() && ($site->lv3dropdown()->bool() === true)): ?>

          <li class="nav_nested">
            <ul class="nav_nested__list" role="group" aria-label="submenu">
              <?php foreach($child->children()->visible() as $grandchild): ?>
              <li class="nav_nested__item" role="menuitem">
                <a class="nav_nested__link<?php e($grandchild->isOpen(), ' is-active_page') ?>" href="<?php if($grandchild->isOpen() && ($page->slug() == $grandchild->slug())): echo '#top'; else: echo $grandchild->url(); endif ?>">
                  <span class="u-screenreader">Subcategory </span><?php echo $grandchild->title() ?>
                </a>
              </li>
              <?php endforeach ?>
            </ul>
          </li>

          <?php endif ?>
        <?php endforeach ?>

        </ul>

        <?php endif ?>

      </li>

    <?php endforeach ?>

    </ul>
  </nav>
</div>

<div class="nav_offset"></div>
