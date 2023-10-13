<?php if(!defined('KIRBY')) exit ?>

title: Parent page
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
