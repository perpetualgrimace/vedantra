<?php

Kirby::plugin('perpetualgrimace/cta', [
  'tags' => [
    'cta' => [
      'attr' => ['text', 'link'],
      'html' => function($tag) {
        $text = $tag->attr('cta', 'cta: ctatext');
        $link = $tag->attr('link', 'about');

        return '<a href="' . $link . '" class="btn--small">' . $text . '</a>';
      }
    ]
  ]
]);