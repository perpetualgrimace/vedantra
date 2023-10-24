<div class="u-row">
  <div class="u-columns">

    <article class="u-content">

      <h2>Abstract:</h2>

      <?php echo $page->text()->kirbytext() ?>

      <p>Read the full paper at <a href="<?php echo $page->link() ?>" target="_blank"><?php echo $page->publication() ?></a>.</p>

      <p>
        <a href="/papers">&larr; All papers</a>
      </p>

    </article>

    <aside class="paper u-sidebar">
      <dl class="paper__meta meta">
      <?php if($page->Publication() != ''): ?>
        <dt>Published in:</dt>
        <dd><a href="<?php echo $page->link() ?>" target="_blank"><?php echo $page->Publication()->kirbytext() ?></a></dd>
      <?php endif ?>
      <?php if($page->Pub_date() != ''): ?>
        <dt>Publication date:</dt>
        <dd><?php echo $page->Pub_date()->toDate('F d, Y') ?></dd>
      <?php endif ?>
      <?php if($page->Authors() != ''): ?>
        <dt>Authors:</dt>
        <dd><?php echo $page->Authors()->kirbytext() ?></dd>
      <?php endif ?>
      </dl>
    </aside>

  </div>
</div>
