<?php

  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-center'; endif;

  // component title
  $rel_title = $page->related_title();

  // check whether to display children or siblings...
  if(($page->depth() == 2) && $page->hasVisibleChildren()):
    $related = $page->children()->listed();
  elseif(($page->depth() == 3) && ($page->hasNextVisible() || $page->hasPrevVisible())):
    $related = $page->siblings()->listed();
  endif;

  // ...and use this component only if one of the previous conditions are met
  if(isset($related)):

?>

<div class="u-row <?php echo $alignment ?>">

  <h2><?php if($rel_title != ''): echo $rel_title; else: echo 'Related pages:'; endif; ?></h2>

  <div class="cards--title_only">

  <?php foreach($related as $rel_page): ?>
    <?php if($rel_page != $page): ?>
      <?php snippet('global.related.card', array('rel_page' => $rel_page)) ?>
    <?php endif ?>
  <?php endforeach ?>

  </div>

</div>

<?php endif ?>
