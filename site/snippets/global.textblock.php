<?php
  // check for optionable variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->text(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($width)): $width = $width; else: $width = null; endif;
?>

<div class="u-row <?php echo $alignment ?>">
  <section class="u-columns <?php echo $width ?>">

    <?php echo $target->kirbytext() ?>

  </section>
</div>
