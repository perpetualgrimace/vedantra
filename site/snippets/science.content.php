<?php

  // pull related papers
  $papers = $pages->find('papers')->children()->listed();

  // check for optionable variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

?>

<div class="u-row <?php echo $alignment ?>">

  <article class="u-content">
    <?php echo $page->text()->kirbytext() ?>
  </article>

  <?php if($page->slug() == 'icmv'): ?>
    <figure class="u-sidebar icmv_img icmv_img--science">
      <?php snippet('illustration.icmv') ?>
      <span class="u-screenreader">The ICMV is made of lipid bilayers joined by cross-links. Adjuvents and antigens are contained within and periodically released.</span>
    </figure>
  <?php elseif($page->slug() == 'amphiphiles'): ?>
    <figure class="u-sidebar amphiphile_img">
      <?php snippet('illustration.amphiphile') ?>
      <span class="u-screenreader">Vedantra's amphiphile technology hitchhikes on endogenous albumin to carry small payloads to the lymph node.</span>
    </figure>
  <?php endif ?>


  <?php if($papers->count() > 0): ?>
    <aside class="u-sidebar">

      <h2>Published papers:</h2>

      <ul>
      <?php foreach($papers as $paper): ?>
        <?php
          if($paper->title()->words() < 9):
            $paper_title = $paper->title();
          else:
            // TODO: replace with chopper $paper_title = $paper->title()->excerpt(7, 'words');
            $paper_title = $paper->title();
          endif;
        ?>

        <li>
          <a href="<?php echo $paper->url() ?>" class="btn--content">
            <?php echo $paper_title; ?>
          </a>
        </li>

      <?php endforeach ?>
      </ul>

    </aside>
  <?php endif ?>

</div>
