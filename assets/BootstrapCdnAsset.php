<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Bootstrap and jQuery CDN asset bundle
 */
class BootstrapCdnAsset extends AssetBundle
{
    public $css = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
    ];
    public $jsOptions = [
        'integrity' => '',
        'crossorigin' => 'anonymous'
    ];
}
