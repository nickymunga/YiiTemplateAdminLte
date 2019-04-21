<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/custom.css',
        'css/animate.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
    ];
    public $js = [
        'js/jsLib.js',
        'js/animate.min.js',
        'js/owl.carouse.min.js',
        'js/wow.min.js',
        'js/easing.min.js',
        'js/hoverIntent.js',
        'js/superfish.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
