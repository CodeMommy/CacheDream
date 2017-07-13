<?php

use CodeMommy\WebPHP\Environment;

return array(
    'debug' => Environment::get('application.debug', false),
    'title' => 'CacheDream - an open source project that provide cache service for developers',
    'domain' => array('staticfile.net', 'www.staticfile.net', 'mirrors.mom', 'www.mirrors.mom', 'www.cachedream.com'),
    'static' => '//cache.shareany.com/?v=1&f=http://www.cachedream.com/static',
);