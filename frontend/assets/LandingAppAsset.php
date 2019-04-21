<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LandingAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/custom.css',
        'css/landing_page/font-awesome.min.css',
        'css/landing_page/owl.carousel.min.css',
        'css/landing_page/slicknav.min.css',
        'css/landing_page/magnificpopup.css',
        'css/landing_page/typography.css',
        'css/landing_page/style.css',
        'css/landing_page/responsive.css',
        'css/langing_page/jquery-ui.css'
        
        
    ];
    public $js = [
        'js/jsLib.js',
        'js/landing_page/jquery-ui.js',
        'js/landing_page/jquery.slicknav.min.js',
        'js/landing_page/owl.carousel.min.js',
        'js/landing_page/magnific-popup.min.js',
        'js/landing_page/counterup.js',
        'js/landing_page/jquery.waypoints.min.js',
        'js/landing_page/theme.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
