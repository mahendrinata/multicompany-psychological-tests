<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'SIPSIKO',
    'preload' => array('log'),
    'import' => array(
        'application.models.*',
        'application.models.forms.*',
        'application.components.*',
        'application.helpers.*',
        'ext.ExtendedClientScript.jsmin.JSMin',
        'application.extensions.CAdvancedArBehavior',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '12345',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    'components' => array(
        'fixture' => array(
            'class' => 'system.test.CDbFixtureManager',
        ),
        'user' => array(
            'allowAutoLogin' => true,
            'loginUrl' => 'user/login',
            'class' => 'WebUser',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=sipsiko_yii',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
//            'routes' => array(
//                array(
//                    'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
//                    'ipFilters' => array('127.0.0.1', '::1'),
//                ),
//            ),
        ),
        'session' => array(
            'class' => 'system.web.CDbHttpSession',
            'connectionID' => 'db',
            'sessionTableName' => 'sessions',
        ),
        'sessionCache' => array(
            'class' => 'CDummyCache',
        ),
        'Date' => array(
            'class' => 'application.components.Date',
            'offset' => 7,
        ),
//        'clientScript' => array(
//            'class' => 'ext.ExtendedClientScript.ExtendedClientScript',
//            'combineCss' => true,
//            'compressCss' => true,
//            'combineJs' => true,
//            'compressJs' => true,
//        ),
        'image' => array(
            'class' => 'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
//            'params' => array('directory' => '/opt/local/bin'),
        ),
    ),
    'params' => array(
        'adminEmail' => 'mahen.0112@gmail.com',
    ),
    'aliases' => array(
        //If you used composer your path should be
        'xupload' => 'ext.vendor.asgaroth.xupload',
        //If you manually installed it
        'xupload' => 'ext.xupload'
    ),
);
