<?php

use CodeMommy\WebPHP\Environment;

return array(
    // Route Type: pathinfo, map or symfony
    'type' => 'symfony',
    // Route Configure
    // any, get, post...
    'get'  => array(
        ''                       => 'Page.HomeController.index',
        'about'                  => 'Page.HomeController.about',
        'web'                    => 'Page.WebController.index',
        'merge'                  => 'Page.HomeController.merge',
        'interface/merge'        => 'Tool.MergeController.index',
        'interface/qr-generator' => 'Tool.QRCodeController.index',
        'cache/{project}'        => 'Page.CacheController.index'
    )
);