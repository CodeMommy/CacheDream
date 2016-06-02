<?php

$projects = array();

$projects['package'] = array('name' => 'Package Repository', 'projects' => array());
$projects['frontend'] = array('name' => 'Front End', 'projects' => array());
$projects['linux'] = array('name' => 'Linux', 'projects' => array());

array_push($projects['package']['projects'], array('name' => 'Packagist (Composer)', 'url' => '/mirrors/packagist/', 'about' => 'The PHP Package Repository'));
array_push($projects['package']['projects'], array('name' => 'PIP', 'url' => '/mirrors/pip/', 'about' => 'Python Package Index'));
array_push($projects['package']['projects'], array('name' => 'NPM', 'url' => '/mirrors/npm/', 'about' => 'Package Manager for JavaScript'));
array_push($projects['package']['projects'], array('name' => 'Maven', 'url' => '/mirrors/maven/', 'about' => 'Apache Maven is a software project management and comprehension tool'));
array_push($projects['package']['projects'], array('name' => 'SBT', 'url' => '/mirrors/sbt/', 'about' => 'Simple Build Tool'));

array_push($projects['frontend']['projects'], array('name' => 'jQuery', 'url' => '/mirrors/jquery/', 'about' => 'jQuery is a fast, small, and feature-rich JavaScript library'));
array_push($projects['frontend']['projects'], array('name' => 'Google Fonts', 'url' => '/mirrors/google-fonts/', 'about' => 'GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information'));
array_push($projects['frontend']['projects'], array('name' => 'Google Hosted Libraries (Google AJAX)', 'url' => '/mirrors/google-ajax/', 'about' => 'Google Hosted Libraries (Google AJAX)'));
array_push($projects['frontend']['projects'], array('name' => 'Baidu TTS', 'url' => '/mirrors/baidu-tts/', 'about' => 'Engine of text to audio from Baidu Fanyi'));
array_push($projects['frontend']['projects'], array('name' => 'QR Generator', 'url' => '/mirrors/qr-generator/', 'about' => 'QR Code Generator'));
array_push($projects['frontend']['projects'], array('name' => 'Taobao IP', 'url' => '/mirrors/taobao-ip/', 'about' => 'Taobao IP'));
array_push($projects['frontend']['projects'], array('name' => 'Gravatar', 'url' => '/mirrors/gravatar/', 'about' => 'Globally Recognized Avatar'));

array_push($projects['linux']['projects'], array('name' => 'Ubuntu', 'url' => '/mirrors/ubuntu/', 'about' => 'Ubuntu is an open source software platform that runs everywhere from the smartphone, the tablet and the PC to the server and the cloud'));
array_push($projects['linux']['projects'], array('name' => 'CentOS', 'url' => '/mirrors/centos/', 'about' => 'The CentOS Project is a community-driven free software effort focused on delivering a robust open source ecosystem'));
array_push($projects['linux']['projects'], array('name' => 'Deepin', 'url' => '/mirrors/deepin/', 'about' => '深度操作系统'));

return $projects;