<?php

namespace virtualwonders\fontawesome;

use yii\web\AssetBundle;

/**
 * Main asset (minified version) bundle.
 */
class FontAwesomeMinifiedAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $css = [
        'css/all.min.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];
}