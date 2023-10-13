<?php

  // don't count current page as a sibling
  $siblings = $page->siblings($self = false)->visible();

  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

?>

<div class="u-row <?php echo $alignment ?>">

  <article class="u-content">
    <?php echo kirbytext($page->text()) ?>
  </article>

  <?php if($siblings->count() > 0): ?>
    <aside class="u-sidebar">

      <h2>
        <?php
        if($page->sidebar_title() != ''):
          echo $page->sidebar_title();
        elseif(($page->sidebar_title() == '') && ($page->parent()->slug() == 'careers')):
          echo 'Other positions:';
        else:
          echo 'Related pages:';
        endif; ?>
      </h2>

      <ul>
      <?php foreach($siblings as $sibling): ?>

        <li>
          <a href="<?php echo $sibling->url() ?>" class="btn--content">
            <?php echo $sibling->title() ?>
          </a>
        </li>

      <?php endforeach ?>
      </ul>

    </aside>
  <?php endif ?>

</div>
