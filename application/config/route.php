<?php

return array(
    // Route Type: pathinfo, map or symfony
    'type' => 'symfony',
    // Route Configure
    // any, get, post...
    'get'  => array(
        ''                       => 'HomeController.index',
        'about'                  => 'HomeController.about',
        'staticfile'                  => 'StaticFileController.index',
        'cache'                  => 'CacheController.index',
        'interface/qr-generator' => 'Tool.QRGeneratorController.index'
    ),
    'any'  => array(
        'mirror/{project}' => 'MirrorController.index'
    )
);