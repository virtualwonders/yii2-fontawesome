Font Awesome
============
An asset bundle for Font Awesome icons with Bootstrap 4.

Installation
------------

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist virtualwonders/yii2-fontawesome "*"
```

or add

```
"virtualwonders/yii2-fontawesome": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Add in the view as follows:

```php
use virtualwonders\fontawesome\FontAwesomeAsset;

FontAwesomeAsset::register($this);
```

Or, use the minified version:

```php
use virtualwonders\fontawesome\FontAwesomeMinifiedAsset;

FontAwesomeMinifiedAsset::register($this);
```

It can also be added as a dependency on your **AppAsset**, as follows:

```php
public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap4\BootstrapAsset',
    'yii\bootstrap4\BootstrapPluginAsset',
    'virtualwonders\fontawesome\FontAwesomeAsset'
];
```