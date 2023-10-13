<?php
  // get the right children
  if($page->slug() == 'people'): $people = $page; else: $people = $page->find('people'); endif;
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  // board of directors
  $employees = $people->children()->listed();
?>

  <div class="u-row <?php echo $alignment ?>">

    <section class="u-column u-sidebar--left">
      <?php echo $people->text()->kirbytext() ?>
    </section>

    <div class="cards u-margin_reset u-column u-content--right">
      <?php foreach($employees as $person): ?>
        <?php snippet('about.people.card', array('child' => $person, 'layout' => 'u-grid--4_2_1')) ?>
      <?php endforeach ?>
    </div>

  </div>
