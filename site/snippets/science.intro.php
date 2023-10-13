<?php
  $children = $page->children()->listed();
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
?>

<div class="u-row <?php echo $alignment ?>">

  <article class="u-content">
    <?php echo kirbytext($page->text()) ?>
  </article>

  <aside class="u-sidebar">

    <?php echo kirbytext($page->diseases()) ?>

    <ul class="btn_group--round">

    <?php foreach($page->children() as $subpage): ?>
      <?php if($subpage->slug() != 'tech'): ?>

      <li class="btn--round">
        <a class="btn--round__link" href="science/<?php echo $subpage->slug() ?>">
          <span class="btn--round__text"><?php echo $subpage->title() ?></span>
        </a>
      </li>

      <?php endif ?>
    <?php endforeach ?>

    </ul>

  </aside>

</div>
