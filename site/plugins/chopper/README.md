# Kirby Chopper Plugin for Kirby 3

Kirby's built in [Excerpt](https://getkirby.com/docs/reference/templates/field-methods/excerpt) takes an all or nothing approach to stripping html tags, and only works on characters. This plugin creates excerpts from fields via KirbyText but keeps any HTML tags, with the ability to define the tags you wish to keep. Also works on whole words, as well as characters.


## Commerical Usage

This plugin is free but if you use it in a commercial project please consider to
- [make a donation 🍻](https://paypal.me/hashandsalt?locale.x=en_GB) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/36141?link=1170)


## Installation

### Manual

To use this plugin, place all the files in `site/plugins/chopper/`.

### Composer

```
composer require hashandsalt/kirby-chopper
```

## Usage

Defaults to limiting to 250 charchters, maintaining whole words, so if you just want 20 words and an ellipsis on the end:

```
<?= $page->yourtextfield()->chopper() ?>
```

To set number of charachters to trim to

```
<?= $page->yourtextfield()->chopper(100) ?>
```

To trim to 50 charachters, maintaining whole words, append an arrow on the on the end:

```
<?= $page->yourtextfield()->chopper(50, ['ellipsis', '→']) ?>
```

To change the default list of kept tags, add this line to your `config.php` and amend accordingly:

```
'hashandsalt.chopper.keep' => '<p><a><strong><em><sub><sup><blockquote><figure><img><h1><h2><h3><h4><h5><h6>',
```

To append every time an arrow at the end, add this line to your `config.php`:

```
'hashandsalt.chopper.ellipsis' => '→',
```

## Options

Full list of options

```
'hashandsalt.chopper.ellipsis' => '…',
'hashandsalt.chopper.exact' => true,
'hashandsalt.chopper.html' => true,
'hashandsalt.chopper.trimWidth' => false,
'hashandsalt.chopper.keep' => '<p><a><strong><em><sub><sup><blockquote><figure><img><h1><h2><h3><h4><h5><h6>',
```


## Requirements

This plugin was built using Kirby 3.6. Will not work on earlier versions. Requires PHP 7.4+


## Credits
Based on text functions in CakePHP https://cakephp.org/
