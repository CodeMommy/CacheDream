<?php

use CodeMommy\WebPHP\Environment;

return array(
    'filePath' => Environment::get('web.file_path', ''),
    'cdn'      => '//cdn.staticfile.shareany.com/',
    'limit'    => array('.', '..', 'readme.txt', 'logo.png', 'Mirror')
);