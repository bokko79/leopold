<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FeatureAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style_1.css',
        'css/animate.css',
        'css/isotope.css',
        'css/jquery-ui.css',
    ];
    public $js = [
        'js/isotope-triger.js',
        'js/isotope.min.js',
        'js/jquery-ui.js',
        'js/jquery.fancybox.pack.js',
        'js/spherefeature.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
