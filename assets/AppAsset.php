<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/modern-style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/modern-app.js',
    ];
    public $depends = [
        'frontend\assets\BootstrapCdnAsset',
    ];
}
