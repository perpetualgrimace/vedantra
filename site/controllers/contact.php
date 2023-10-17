<?php

return function($site, $pages, $page) {

  $form = array(
      'required' => array(
        'name' => '',
        'email' => 'email',
        'text' => '',
      ),
      'actions'  => array(
        array(
          '_action' => 'email',
          'to'      => $page->email(),
          'sender'  => $page->email(),
        )
      )
    )
  ;

  return compact('form');
};
