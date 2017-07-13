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
        'staticfile'             => 'Page.StaticFileController.index',
        'interface/cache'        => 'Tool.CacheController.index',
        'interface/qr-generator' => 'Tool.QRGeneratorController.index',
        'cache/{project}'        => 'Page.MirrorController.index'
    )
);