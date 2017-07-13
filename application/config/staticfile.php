<?php

use CodeMommy\WebPHP\Environment;

return array(
    'debug'     => true,
    'site_name' => 'CodeMommy Static File',
    'file_path' => __DIR__ . '/../../../www.staticfile.net/public/file/',
    'cdn'       => '//cdn.staticfile.shareany.com/',
    'static'    => '//static.shareany.com/product/staticfile',
    'domain'    => array('staticfile.net', 'www.staticfile.net'),
    'limit'     => array('.', '..', 'readme.txt', 'logo.png', 'Mirror')
);