<?php

use CodeMommy\WebPHP\Environment;

return array(
    'debug'     => true,
    'site_name' => 'CacheDream StaticFile',
    'file_path' => __DIR__ . '/../../../www.staticfile.net/public/file/',
    'cdn'       => '//cdn.staticfile.shareany.com/',
    'static'    => '//cache.shareany.com/?v=1&f=http://www.cachedream.com/static',
    'domain'    => array('staticfile.net', 'www.staticfile.net', 'www.cachedream.com'),
    'limit'     => array('.', '..', 'readme.txt', 'logo.png', 'Mirror')
);