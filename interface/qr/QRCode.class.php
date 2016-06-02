<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;
use BaconQrCode\Common\ErrorCorrectionLevel;

class QRCode extends Png
{
    private $text = null;

    public function __construct()
    {
        $this->text = 'Hello';
        $this->setWidth(500);
        $this->setHeight(500);
        $this->setMargin(0);
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function showInBrowser()
    {
        $writer = new Writer($this);
        $writer->writeString($this->text, 'UTF-8', ErrorCorrectionLevel::L);
        $imageStream = $this->getByteStream();
        header('Content-type: image/png');
        echo $imageStream;
    }

    public function saveToFile($filename)
    {
        $writer = new Writer($this);
        $writer->writeFile($this->text, $filename, 'UTF-8', ErrorCorrectionLevel::L);
    }
}