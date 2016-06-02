<?php

$projects = array();

$projects['package'] = array('name' => 'Package Repository', 'projects' => array());
$projects['frontend'] = array('name' => 'Front End', 'projects' => array());
$projects['linux'] = array('name' => 'Linux', 'projects' => array());

array_push($projects['package']['projects'], array('name' => 'Packagist (Composer)', 'url' => '/packagist/', 'about' => 'The PHP Package Repository'));
array_push($projects['package']['projects'], array('name' => 'PIP', 'url' => '/pip/', 'about' => 'Python Package Index'));
array_push($projects['package']['projects'], array('name' => 'NPM', 'url' => '/npm/', 'about' => 'Package Manager for JavaScript'));
array_push($projects['package']['projects'], array('name' => 'Maven', 'url' => '/maven/', 'about' => 'Apache Maven is a software project management and comprehension tool'));
array_push($projects['package']['projects'], array('name' => 'SBT', 'url' => '/sbt/', 'about' => 'Simple Build Tool'));

array_push($projects['frontend']['projects'], array('name' => 'jQuery', 'url' => '/jquery/', 'about' => 'jQuery is a fast, small, and feature-rich JavaScript library'));
array_push($projects['frontend']['projects'], array('name' => 'Google Fonts', 'url' => '/googlefonts/', 'about' => 'GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information'));
array_push($projects['frontend']['projects'], array('name' => 'Google Hosted Libraries (Google AJAX)', 'url' => '/googleajax/', 'about' => 'Google Hosted Libraries (Google AJAX)'));
array_push($projects['frontend']['projects'], array('name' => 'Baidu TTS', 'url' => '/baidutts/', 'about' => 'Engine of text to audio from Baidu Fanyi'));
array_push($projects['frontend']['projects'], array('name' => 'QR Generator', 'url' => '/qr/', 'about' => 'QR Code Generator'));
array_push($projects['frontend']['projects'], array('name' => 'Taobao IP', 'url' => '/taobaoip/', 'about' => 'Taobao IP'));
array_push($projects['frontend']['projects'], array('name' => 'Gravatar', 'url' => '/gravatar/', 'about' => 'Globally Recognized Avatar'));

array_push($projects['linux']['projects'], array('name' => 'Ubuntu', 'url' => '/ubuntu/', 'about' => 'Ubuntu is an open source software platform that runs everywhere from the smartphone, the tablet and the PC to the server and the cloud'));
array_push($projects['linux']['projects'], array('name' => 'CentOS', 'url' => '/centos/', 'about' => 'The CentOS Project is a community-driven free software effort focused on delivering a robust open source ecosystem'));
array_push($projects['linux']['projects'], array('name' => 'Deepin', 'url' => '/deepin/', 'about' => '深度操作系统'));

return $projects;