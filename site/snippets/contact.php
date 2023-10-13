<?php
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
?>

<div class="u-row <?php echo $alignment ?>">

  <div class="u-content" id="contactform">

  <?php if($form->hasMessage()): ?>

    <?php if($form->successful()): ?>

    <div class="js-message--success is-successful">
      <div class="u-row u-center">
        <?php echo $page->success()->kirbytext() ?>
      </div>
    </div>

    <?php else: ?>

    <div class="js-message--fail is-fail">
      <div class="u-row u-center">
        <?php echo $page->fail()->kirbytext() ?>
      </div>
    </div>

  <?php endif ?>
  <?php else: ?>

    <h2><?php echo $page->headline() ?></h2>
    <?php echo snippet('contact.form') ?>

  <?php endif ?>

    <div class="u-alert js-message--success is-successful" style="display: none;">
      <div class="u-row u-center">
        <?php echo $page->success()->kirbytext() ?>
      </div>
    </div>

    <div class="u-alert js-message--fail is-fail" style="display: none;">
      <div class="u-row u-center">
        <?php echo $page->fail()->kirbytext() ?>
      </div>
    </div>

  </div>

  <aside class="u-sidebar u-sidebar--contact">
    <?php snippet('contact.sidebar') ?>
  </aside>

</div>
