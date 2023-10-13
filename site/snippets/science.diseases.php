<?php
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left--center'; endif;
  if(isset($width)): $width = $width; else: $width = null; endif;
?>

<div class="u-row <?php echo $alignment ?>">
  <section class="u-columns <?php echo $width ?>">

    <?php echo $page->diseases()->kirbytext() ?>

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
  </section>
</div>
