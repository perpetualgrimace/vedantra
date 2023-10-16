<?php
  // check for optionable variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = 0; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif; // used in opening main block
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  // check the depth of the page within the site hierarchy
  if($page->depth() == 2): $page_depth = 'is-l2';
    elseif($page->depth() > 2): $page_depth = 'is-l3';
    else: $page_depth = null;
  endif;
?>

<header class="header u-dark <?php echo $depth . ' ' . $page_depth ?>" role="banner">
  <div class="u-vcenter">
    <div class="u-row <?php echo $alignment ?>">

      <div class="header__container u-left">

        <?php if(($page->depth() >= 1) && $page->parent() && $page->parent()->slug() != 'papers'): ?>

        <div class="breadcrumbs" role="navigation">
          <ul class="breadcrumbs__list">

          <?php foreach($site->breadcrumb() as $crumb): ?>
            <?php if(($crumb->uri() != 'home') && ($crumb->isActive() == false)): ?>

            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="<?php echo $crumb->url() ?>">
                <?php echo $crumb->title() ?>
              </a>
            </li>

            <?php endif ?>
          <?php endforeach ?>

          </ul>
        </div>

        <?php endif ?>

        <h1 class="header__headline">
          <?php echo $page->title() ?>
        </h1>

      </div>

    </div>
  </div>
  <div class="header__graphic header__graphic--left"></div>
  <div class="header__graphic header__graphic--right"></div>

</header>

<main role="main" class="main <?php echo $depth . ' ' . $theme ?>">
