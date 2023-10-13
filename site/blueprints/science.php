<?php if(!defined('KIRBY')) exit ?>

title: Science
files: true
pages:
  template:
    science.child
    science.parent

fields:
  title:
    label: Title
    type:  text
  text:
    label: Intro text
    type:  markdown
    width: 3/4
  diseases:
    label: Diseases sidebar
    type: markdown
