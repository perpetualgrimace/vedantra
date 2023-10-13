<?php

  $items = $pages->find('science')->grandChildren()->visible()->flip()->limit(10);

  snippet('feed', array(
    'link'  => url('science'),
    'items' => $items,
    'descriptionField'  => 'description',
    'descriptionLength' => 150
  ));
