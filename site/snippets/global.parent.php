<?php
  $children = $page->children()->listed();
  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
?>

<div class="u-row <?php echo $alignment ?>">

  <article <?php if($children->count() > 0): echo 'class="u-content"'; endif ?>>
    <?php echo $page->text()->kirbytext() ?>
  </article>

<?php if($children->count() > 0): ?>
  <aside class="u-sidebar">

  <h2>
    <?php
    if($page->sidebar_title() != ''):
      echo $page->sidebar_title();
    elseif(($page->sidebar_title() == '') && ($page->slug() == 'careers')):
      echo 'Open positions:';
    else:
      echo 'Related pages:';
    endif; ?>
  </h2>

    <ul>

    <?php foreach($children as $child): ?>

      <li><a href="<?php echo $child->url() ?>" class="btn--content"><?php echo $child->title() ?></a></li>

    <?php endforeach ?>

    </ul>

  </aside>
<?php endif ?>

</div>
