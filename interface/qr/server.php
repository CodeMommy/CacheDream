<?php

function printLine($text)
{
    fwrite(STDOUT, iconv('UTF-8', 'GB2312', $text));
    echo "\n";
}

printLine('Server start at http://0.0.0.0:8888');
system('php -S 0.0.0.0:8888');