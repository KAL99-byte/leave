<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
       'assets/vendor/bootstrap/css/bootstrap.min.css',
       'assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'assets/vendor/boxicons/css/boxicons.min.css',
       'assets/vendor/quill/quill.snow.css',
        'assets/vendor/quill/quill.bubble.css',
    'assets/vendor/remixicon/remixicon.css',
        'assets/vendor/simple-datatables/style.css',

    'css/styles.css',
        'css/style.css',
       'css/bootstrap.css',
'css/dataTables.bootstrap4.min.css',
'css/bootstrap-datepicker.min.css',





    ];
    public $js = [


      
 



       'assets/vendor/apexcharts/apexcharts.min.js',
       'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
       'assets/vendor/chart.js/chart.umd.js',
       'assets/vendor/echarts/echarts.min.js',
        'assets/vendor/quill/quill.min.js',
        'assets/vendor/simple-datatables/simple-datatables.js',
        'assets/vendor/tinymce/tinymce.min.js',
       'assets/vendor/php-email-form/validate.js',
      
   
        'js/main.js',
    
        'js/datatables.js',
          
'js/jquery.dataTables.min.js',
'js/dataTables.bootstrap4.min.js',
'js/bootstrap-datepicker.min.js',
'js/datepicker.js',

      
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
