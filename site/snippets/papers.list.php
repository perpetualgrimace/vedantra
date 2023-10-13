<?php
  // papers, please
  $papers = $page->children()->listed()->sortBy('pub_date', 'desc');
?>

  <div class="u-row">

    <div class="cards u-columns u-9col">
      <?php foreach($papers as $paper): ?>
        <?php snippet('papers.card', array('child' => $paper)) ?>
      <?php endforeach; ?>
    </div>

  </div>
