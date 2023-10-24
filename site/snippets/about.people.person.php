<?php
  if($page->image('person.jpg')):
    $img = 'person.jpg';
  elseif($page->image('person.png')):
    $img = 'person.png';
  else:
    $img = null;
  endif;
?>

<div class="u-row">
  <div class="u-columns">

    <figure class="u-sidebar--left">
      <div class="person">
        <?php if($img != null): ?>

           <img class="person__img"
                srcset="<?php echo $page->url() . '/' . $img; ?> 330w,
                     <?php echo $page->image($img)->thumb(array('width' => 200, 'quality' => 90))->url() ?> 200w"
                sizes="90vw,
                  (min-width: 40em) 42vw,
                  (min-width: 64em) 22vw,
                  (min-width: 100em) 420px"
                src="<?php echo $page->url() . '/' . $img; ?>"
                alt="">

        <?php else: ?>

         <img class="person__img" src="/person_placeholder.png">

        <?php endif ?>

        <dl class="meta person__meta">
        <?php if($page->Position() != ''): ?>
          <dt>Position:</dt>
          <dd><?php echo $page->Position()->kirbytext() ?></dd>
        <?php endif ?>
        <?php if($page->Also() != ''): ?>
          <dt>Also:</dt>
          <dd><?php echo $page->Also()->kirbytext() ?></dd>
        <?php endif ?>
        <?php if($page->Former() != ''): ?>
          <dt>Former:</dt>
          <dd><?php echo $page->Former()->kirbytext() ?></dd>
        <?php endif ?>
        </dl>
      </div>
    </figure>

    <article class="u-content--right">
      <?php echo $page->text()->kirbytext() ?>
    </article>

  </div>
</div>
