<?php
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-center--left'; endif;
  if(isset($width)): $width = $width; else: $width = null; endif;
?>

<div class="u-row <?php echo $alignment ?>">
  <section class="u-columns <?php echo $width ?>">

    <h2 class="sci_hl">

      <div class="sci_hl__wrapper sci_hl__wrapper--efficacy">
        <div class="sci_hl__fig sci_hl__fig--efficacy">
          <?php snippet('icon.brand-triangle') ?>
        </div>
        <span class="efficacy__text">efficacy<span class="u-screenreader"> up, </span></span>
      </div>

      <div class="sci_hl__wrapper sci_hl__wrapper--toxicity">
        <div class="sci_hl__fig sci_hl__fig--toxicity">
          <?php snippet('icon.brand-triangle') ?>
        </div>
        <span class="toxicity__text">toxicity<span class="u-screenreader"> down</span></span>
      </div>

    </h2>
    <?php echo $page->text()->kirbytext() ?>

  </section>
</div>
