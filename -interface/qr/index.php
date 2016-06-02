<?php

require_once(__DIR__ . '/QRCode.class.php');

/*
 * Get Config
 */
$dataWidth = intval(isset($_GET['w']) ? $_GET['w'] : '500');
$dataHeight = intval(isset($_GET['h']) ? $_GET['h'] : '500');
$dataText = isset($_GET['t']) ? $_GET['t'] : 'Hello';

/*
 * Set QR
 */
$qr = new QRCode();
$qr->setWidth($dataWidth);
$qr->setHeight($dataHeight);
$qr->setText($dataText);

/*
 * Show
 */
$qr->showInBrowser();

//$qr->saveToFile('qr.png');