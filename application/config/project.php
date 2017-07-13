<?php

use CodeMommy\WebPHP\Environment;

$projects = array();

$projects['package'] = array('name' => 'Package Repository', 'projects' => array());
$projects['frontend'] = array('name' => 'Front End', 'projects' => array());
$projects['linux'] = array('name' => 'Linux', 'projects' => array());
$projects['link'] = array('name' => 'Other Hosting', 'projects' => array());

array_push($projects['package']['projects'], array('name' => 'Packagist (Composer)', 'url' => '/mirror/packagist/', 'about' => 'The PHP Package Repository'));
array_push($projects['package']['projects'], array('name' => 'PIP', 'url' => '/mirror/pip/', 'about' => 'Python Package Index'));
array_push($projects['package']['projects'], array('name' => 'GEM', 'url' => '/mirror/gem/', 'about' => 'GEM Package Index'));
array_push($projects['package']['projects'], array('name' => 'NPM', 'url' => '/mirror/npm/', 'about' => 'Package Manager for JavaScript'));
array_push($projects['package']['projects'], array('name' => 'Maven', 'url' => '/mirror/maven/', 'about' => 'Apache Maven is a software project management and comprehension tool'));
array_push($projects['package']['projects'], array('name' => 'SBT', 'url' => '/mirror/sbt/', 'about' => 'Simple Build Tool'));
array_push($projects['package']['projects'], array('name' => 'MELPA', 'url' => '/mirror/emacs-melpa/', 'about' => 'Milkypostman’s Emacs Lisp Package Archive'));

array_push($projects['frontend']['projects'], array('name' => 'StaticFile', 'url' => '/staticfile', 'about' => 'Professional front-end library CDN hosting'));
array_push($projects['frontend']['projects'], array('name' => 'Cache', 'url' => 'http://www.cachedream.com/', 'about' => 'Cache'));
array_push($projects['frontend']['projects'], array('name' => 'jQuery', 'url' => '/mirror/jquery/', 'about' => 'jQuery is a fast, small, and feature-rich JavaScript library'));
array_push($projects['frontend']['projects'], array('name' => 'Google Fonts', 'url' => '/mirror/google-fonts/', 'about' => 'GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information'));
array_push($projects['frontend']['projects'], array('name' => 'Google Hosted Libraries (Google AJAX)', 'url' => '/mirror/google-hosted-libraries/', 'about' => 'The Google Hosted Libraries is a stable, reliable, high-speed, globally available content distribution network for the most popular, open-source JavaScript libraries
'));
array_push($projects['frontend']['projects'], array('name' => 'Baidu TTS', 'url' => '/mirror/baidu-tts/', 'about' => 'Engine of text to audio from Baidu Fanyi'));
array_push($projects['frontend']['projects'], array('name' => 'QR Generator', 'url' => '/mirror/qr-generator/', 'about' => 'QR Code Generator'));
array_push($projects['frontend']['projects'], array('name' => 'Taobao IP', 'url' => '/mirror/taobao-ip/', 'about' => 'Taobao IP'));
array_push($projects['frontend']['projects'], array('name' => 'Gravatar', 'url' => '/mirror/gravatar/', 'about' => 'Globally Recognized Avatar'));

array_push($projects['linux']['projects'], array('name' => 'Ubuntu', 'url' => '/mirror/ubuntu/', 'about' => 'Ubuntu is an open source software platform that runs everywhere from the smartphone, the tablet and the PC to the server and the cloud'));
array_push($projects['linux']['projects'], array('name' => 'CentOS', 'url' => '/mirror/centos/', 'about' => 'The CentOS Project is a community-driven free software effort focused on delivering a robust open source ecosystem'));
array_push($projects['linux']['projects'], array('name' => 'Deepin', 'url' => '/mirror/deepin/', 'about' => '深度操作系统'));

array_push($projects['link']['projects'], array('name' => 'CDNJS', 'url' => 'https://cdnjs.com/', 'about' => 'CDNJS'));
array_push($projects['link']['projects'], array('name' => 'jsDelivr', 'url' => 'http://www.jsdelivr.com/', 'about' => 'A free super-fast CDN for developers and webmasters'));
array_push($projects['link']['projects'], array('name' => 'Google Hosted Libraries', 'url' => 'https://developers.google.com/speed/libraries/', 'about' => 'The Google Hosted Libraries is a stable, reliable, high-speed, globally available content distribution network for the most popular, open-source JavaScript libraries'));
array_push($projects['link']['projects'], array('name' => 'Microsoft Ajax Content Delivery Network', 'url' => 'http://www.asp.net/ajax/cdn', 'about' => 'Microsoft Ajax Content Delivery Network'));
//array_push($projects['link']['projects'], array('name' => '百度静态资源公共库', 'url' => 'http://cdn.code.baidu.com/', 'about' => '百度静态资源公共库'));
//array_push($projects['link']['projects'], array('name' => '百度CDN公共库', 'url' => 'http://developer.baidu.com/wiki/index.php?title=docs/cplat/libs', 'about' => 'CDN公共库是指将常用的JS库存放在CDN节点，以方便广大开发者直接调用'));
//array_push($projects['link']['projects'], array('name' => '360网站卫士常用前端公共库CDN服务', 'url' => 'http://libs.useso.com/', 'about' => '这里提供了由360网站卫士CDN驱动的常用前端公共库以及和谐使用Google公共库&字体库的调用方法'));
array_push($projects['link']['projects'], array('name' => 'Public Resources on SAE', 'url' => 'http://lib.sinaapp.com/', 'about' => 'Public Resources on SAE'));
array_push($projects['link']['projects'], array('name' => '又拍云常用JavaScript库CDN服务', 'url' => 'http://jscdn.upai.com/', 'about' => '又拍云为您托管常用的JavaScript库，您可以在自己的网页上直接通过script标记引用这些资源'));
array_push($projects['link']['projects'], array('name' => 'BootCDN', 'url' => 'http://www.bootcdn.cn/', 'about' => '稳定、快速、免费的开源项目 CDN 服务'));
array_push($projects['link']['projects'], array('name' => '开放静态文件 CDN', 'url' => 'http://www.staticfile.org/', 'about' => '为开源库提供稳定、快速的免费 CDN 服务'));
//array_push($projects['link']['projects'], array('name' => '沙塔', 'url' => 'http://lib.shatacloud.com/', 'about' => '沙塔为您提供常用的JS库，免费在您网页上引用资源，并由遍布全国CDN节点提供加速服务'));
array_push($projects['link']['projects'], array('name' => '前端公共库CDN加速', 'url' => 'http://cdnjs.net/', 'about' => '阿里云CDN加速，永久免费，保护隐私，500+节点毫秒级响应'));
array_push($projects['link']['projects'], array('name' => '网易开源镜像站', 'url' => 'http://mirrors.163.com/', 'about' => '网易开源镜像站'));
array_push($projects['link']['projects'], array('name' => 'Sohu.com Open Source Mirror Site', 'url' => 'http://mirrors.sohu.com/', 'about' => 'Sohu.com Open Source Mirror Site'));
array_push($projects['link']['projects'], array('name' => 'USTC open source software mirror', 'url' => 'http://mirrors.ustc.edu.cn/', 'about' => 'USTC open source software mirror'));

return $projects;