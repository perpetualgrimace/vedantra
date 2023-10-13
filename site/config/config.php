<?php

c::set('license', 'K2-PRO-e061600b42c67242b0c4eb7ea186b689');
// smart quotes
c::set('smartypants', true);
// thumbnails
c::set('thumbs.driver', 'gd');
// languages
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'default' => true,
    'url'     => '/'
  )
));
// routing
c::set('routes', array(
// rss » feed
  array(
    'pattern' => 'rss',
    'action'  => function() {
      go('feed');
    }
  ),
));
