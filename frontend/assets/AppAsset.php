<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bcms.css', 
        'css/feature-carousel.css',
    ];
    public $js = [
        'js/jquery-1.js',
        'js/jquery.js',
        'js/main_js.js',
        'js/common.js',
        'js/slider.js',
        'js/js.js',
        
        
        
    ];
    public $depends = [
        
    ];
}
