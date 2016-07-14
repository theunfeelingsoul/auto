<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AutoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/style.css',
		'css/skeleton.css',
		'sliders/flexslider/flexslider.css',
		'fancybox/jquery.fancybox.css',
    ];
    public $js = [
		// 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
	    'js/modernizr.custom.js',
		'sliders/flexslider/jquery.flexslider-min.js',
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyAjMBVn_GZdUo1xzvfQwcggnBrXN8bcMas',
		'js/jquery.gmap.min.js',
		'js/jquery-impromptu.js',
		'js/jquery.galleriffic.js',
		'js/custom.js',
		// 'http://code.jquery.com/jquery-migrate-1.2.1.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
