<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SphereViewerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/photo-sphere-viewer.min.css',
    ];
    public $js = [
        'js/three.min.js',
        'js/doT.js',
        'js/uevent.min.js',
        'js/D.min.js',            
        'js/photo-sphere-viewer.min.js',
    ];
    public $depends = [
    ];
}
