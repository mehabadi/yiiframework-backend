<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Behnoush',
    //default languages
    'sourceLanguage' => 'en',
    'language' => 'en',
    'theme' => 'admin',
    // preloading 'log' component
    'preload' => array('gettext', 'log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
    // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            'class' => 'WebUser',
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
//        'db' => array(
//            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
//        ),
        // uncomment the following to use a MySQL database

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=behnoush',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_'
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'account/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
//                array(
//                    'class' => 'CWebLogRoute',
//                ),
            ),
        ),
        'request' => array(
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'class' => 'application.components.UrlManager',
            'urlFormat' => 'path',
            //'urlSuffix'=>'.html',
            //'showScriptName' => false,
            'rules' => array(
                '/' => 'account/index',
                '<language:(fa|ar|en)>/' => 'account/index',
                '<language:(fa|ar|en)>/<action:(contact|login|logout)>/*' => 'account/<action>',
                '<language:(fa|ar|en)>/<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<language:(fa|ar|en)>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<language:(fa|ar|en)>/<controller:\w+>/<action:\w+>/*' => '<controller>/<action>',
            ),
        ),
        'gettext' => array(
            'class' => 'ext.gettext.components.GetText',
            // specify language_locale, could be based on domain name, URI, cookie, etc
            'language' => 'ar_ae', // means arabic
            'language' => 'fa_ir', // means persian
        ),
        'HtmlHelpers' => array(
            'class' => 'application.components.HtmlHelpers',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'copyright' => 'IITCO',
        'copyright_url' => 'http://iitco.ir',
        'adminEmail' => 'webmaster@example.com',
        'languages' => array('en' => 'English', 'fa' => 'فارسی', 'ar' => 'العربی'),
        'direction' => 'ltr',
        'gettext_cache' => false,
        'applicationId' => 1,
    ),
);