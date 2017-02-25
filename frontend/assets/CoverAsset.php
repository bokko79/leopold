<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CoverAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style_1.css',
        'css/animate.css',
        'css/isotope.css',
        'css/jquery-ui.css',
        'css/jquery.fancybox.css',
        'css/select_option1.css',
    ];
    public $js = [
        'js/custom.js',
        'js/isotope-triger.js',
        'js/isotope.min.js',
        'js/jquery-ui.js',
        'js/jquery.counterup.min.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.selectbox-0.1.3.min.js',
        'js/jquery.syotimer.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.themepunch.tools.min.js',
        'js/optionswitcher.js',
        'js/SmoothScroll.js',
        'js/waypoints.min.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
