<div class="card card--horizontal">

    <a class="caption" href="<?php echo $child->url() ?>" role="link">
      <h3 class="caption__title"><?php echo $child->title() ?></h3>
      <p class="caption__subtitle u-small">Published in <?php echo $child->publication() ?> on <time> <?php echo $child->Pub_date()->toDate('F d, Y') ?></time></p>
    </a>

 </div>
