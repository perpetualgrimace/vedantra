<?php if(!defined('KIRBY')) exit ?>

title: Page
pages:
  template:
    sibling
    parent

files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
