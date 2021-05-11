<?php

namespace app\assets\backend;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'back/css/bootstrap.min.css',
        'back/css/font-awesome.css',
        'back/css/ionicons.min.css',
        'back/css/AdminLTE.min.css',
        'back/css/skin-blue.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
    ];
    public $js = [
        'back/js/bootstrap.min.js',
        'back/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}