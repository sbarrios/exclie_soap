<?php
defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'exclie_phal',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_DIR . '/controllers/',
        'modelsDir' => APP_DIR . '/models/',
        'formsDir' => APP_DIR . '/forms/',
        'viewsDir' => APP_DIR . '/views/',
        'libraryDir' => APP_DIR . '/library/',
        'pluginsDir' => APP_DIR . '/plugins/',
        'cacheDir' => APP_DIR . '/cache/',
        'baseUri' => '/exclie_soap/',
        //'publicUrl' => 'vokuro',
        'cryptSalt' => 'eEAfR|_&G&f,+vU]:jFr!!A&+71w1Ms9~8_4L!<@[N@DyaIP_2My|:+.u>/6m,$D'
    ),
    //  'application' => array(
    //     'controllersDir' => APP_PATH . '/app/controllers/',
    //     'modelsDir'      => APP_PATH . '/app/models/',
    //     'formsDir'       => APP_PATH . '/app/forms/',
    //     'migrationsDir'  => APP_PATH . '/app/migrations/',
    //     'viewsDir'       => APP_PATH . '/app/views/',
    //     'pluginsDir'     => APP_PATH . '/app/plugins/',
    //     'libraryDir'     => APP_PATH . '/app/library/',
    //     'cacheDir'       => APP_PATH . '/app/cache/',
    //     'baseUri'        => '/exclie_alfa/',
    // ),
    'mail' => array(
        'fromName' => 'Voku',
        'fromEmail' => '',
        'smtp' => array(
            'server' => 'smtp.gmail.com',
            'port' => 587,
            'security' => 'tls',
            'username' => '',
            'password' => ''
        )
    ),
    'amazon' => array(
        'AWSAccessKeyId' => '',
        'AWSSecretKey' => ''
    )
));
