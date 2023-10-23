<?php
require 'vendor/autoload.php';

class GenerateQr
{
    /**
     * Generate QR Code
     * @param string $url
     * @param array $foreground
     * @param array $background
     * @param string $label
     * @return void
     */
    public function generate(string $url, array $foreground, array $background, string $label)
    {
        $qrCode = new Endroid\QrCode\QrCode($url);
        $qrCode->setSize(500);
        $qrCode->setForegroundColor(['r' => $foreground[0], 'g' => $foreground[1], 'b' => $foreground[2]]);
        $qrCode->setBackgroundColor(['r' => $background[0], 'g' => $background[1], 'b' => $background[2]]);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setLabel($label);
        $qrCode->setValidateResult(false);
        $qrCode->setRoundBlockSize(true);
        $qrCode->setWriterByExtension('png');
        $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);
        $qrCode->writeFile('qrcode.png');
    }

    public function display()
    {
        echo '<img src="qrcode.png" alt="QR Code" />';
    }

    public function download()
    {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="qrcode.png"');
        readfile('qrcode.png');
    }

    public function delete()
    {
        unlink('qrcode.png');
    }
}

