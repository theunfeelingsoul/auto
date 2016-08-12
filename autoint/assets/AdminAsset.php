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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'admin/bower_components/bootstrap/dist/css/bootstrap.min.css',
		'admin/bower_components/metisMenu/dist/metisMenu.min.css',
		'admin/dist/css/sb-admin-2.css',
		'admin/bower_components/font-awesome/css/font-awesome.min.css',
	
    ];
    public $js = [
		'admin/bower_components/metisMenu/dist/metisMenu.min.js',
		'admin/dist/js/sb-admin-2.js',
        'js/testing.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
