<div class="card card--horizontal">

    <a class="caption" href="<?php echo $child->url() ?>" role="link">
      <h3 class="caption__title"><?php echo $child->title() ?></h3>
      <p class="caption__subtitle u-small">Published in <?php echo $child->publication() ?> on <time> <?php echo $child->date('F d, Y', 'Pub_date') ?></time></p>
    </a>

 </div>
