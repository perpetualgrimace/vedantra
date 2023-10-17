<?php
  if($child->image('person.jpg')):
    $img = 'person.jpg';
  elseif($child->image('person.png')):
    $img = 'person.png';
  else:
    $img = null;
  endif;
?>

 <div class="card card--vertical">

    <?php /* <a class="thumb u-screenreader--ignore" href="<?php echo $child->url() ?>" tabindex="-1"> */ ?>

    <?php if($img != null): ?>

       <img class="thumb__img"
            srcset="<?php echo $child->url() . '/' . $img; ?> 330w,
                 <?php echo $child->image($img)->thumb(array('width' => 200, 'quality' => 90))->url() ?> 200w"
            sizes="90vw,
              (min-width: 40em) 42vw,
              (min-width: 64em) 22vw,
              (min-width: 100em) 420px"
            src="<?php echo $child->url() . '/' . $img; ?>"
            alt="">

    <?php else: ?>

     <img class="thumb__img" src="<?php echo $page->url() . '/' ?>person_placeholder.png">

    <?php endif ?>

  <?php /* </a>

    <a class="caption" href="<?php echo $child->url() ?>" role="link">
      <h3 class="caption__title"><?php echo $child->title() ?></h3>
      <p class="caption__subtitle u-small"><?php echo $child->position() ?></p>
    </a>

  */ ?>

    <div class="caption">
      <h3 class="caption__title"><?php echo $child->title() ?></h3>
      <p class="caption__subtitle u-small"><?php echo $child->position() ?></p>
    </div>

 </div>
