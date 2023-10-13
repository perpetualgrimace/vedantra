<?php if(!defined('KIRBY')) exit ?>

title: Home page
pages: false
fields:
  headline:
    label: Headline
    type: text
  subhead:
    label: Subhead
    type: text
  text:
    label: Intro textblock
    type: markdown
    help: "Note: The heading (efficacy up, toxicity down) is shown above this textblock"
  tech:
    label: Techology textblock
    type: markdown
    help: "Note: ICMV image is shown with this textblock"
  about:
    label: About textblock
    type: markdown
