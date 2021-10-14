<div style="text-align: center">

![Yii2 Smartsupp Chat](logo.png)
</div>

![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/tomlutzenberger/yii2-smartsupp-chat)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/tomlutzenberger/yii2-smartsupp-chat)
![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/tomlutzenberger/yii2-smartsupp-chat)
![Packagist Downloads](https://img.shields.io/packagist/dt/tomlutzenberger/yii2-smartsupp-chat)
![Lines of code](https://img.shields.io/tokei/lines/github/tomlutzenberger/yii2-smartsupp-chat)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=tomlutzenberger_yii2-smartsupp-chat&metric=alert_status)](https://sonarcloud.io/dashboard?id=tomlutzenberger_yii2-smartsupp-chat)
![Maintenance](https://img.shields.io/maintenance/yes/2021)

Yii2 Smartsupp
=====================
Yii2 Widget for Smartsupp Chat

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tomlutzenberger/yii2-smartsupp-chat "*"
```

or add

```
"tomlutzenberger/yii2-smartsupp-chat": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?= \TomLutzenberger\Smartsupp\SmartsuppChat::widget() ?>
```

You can either add the ID of your container to the `params.php`

```php
<?php
      
return [
    // ...
    'smartsupp' => 'your_key',
];
```

or pass it
directly to the widget: 

```php
<?= \TomLutzenberger\Smartsupp\SmartsuppChat::widget([
    'key' => 'your_key'
]) ?>
```

To be able to use your own triggers you can do this by setting 2 optional parameters:

```php
<?= \TomLutzenberger\Smartsupp\SmartsuppChat::widget([
    'useCustomOpener' => true,
    'useCustomOpenerMobile' => true,
]) ?>
```

For more details see:
- https://docs.smartsupp.com/examples/html-api/
- https://docs.smartsupp.com/javascript-api/

License
-----
This package is published under the MIT License and can be used for any 
commercial and personal projects.
