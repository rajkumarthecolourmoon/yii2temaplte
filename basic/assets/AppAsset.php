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
        'theme/assets/vendor/bootstrap/css/bootstrap.min.css',
        "theme/assets/vendor/icofont/icofont.min.css",
        'theme/assets/vendor/boxicons/css/boxicons.min.css',
        'theme/assets/vendor/animate.css/animate.min.css',
        'theme/assets/vendor/venobox/venobox.css',
        'theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'theme/assets/vendor/aos/aos.css',
        'theme/assets/css/style.css',
    ];
    public $js = [
         'theme/assets/vendor/jquery/jquery.min.js',
          'theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
          'theme/assets/vendor/jquery.easing/jquery.easing.min.js',
          'theme/assets/vendor/php-email-form/validate.js',
         'theme/assets/vendor/jquery-sticky/jquery.sticky.js',
          'theme/assets/vendor/isotope-layout/isotope.pkgd.min.js',
          'theme/assets/vendor/venobox/venobox.min.js',
          'theme/assets/vendor/waypoints/jquery.waypoints.min.js',
          'theme/assets/vendor/owl.carousel/owl.carousel.min.js',
          'theme/assets/vendor/aos/aos.js',
        'theme/assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
