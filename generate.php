<?php
require 'vendor/autoload.php';

require 'GenerateQr.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = isset($_POST["url"]) ? $_POST["url"] : "";

    if (!empty($url)) {

        $background = isset($_POST["background"]) ? $_POST["background"] : "#ffffff";
        $foreground = isset($_POST["foreground"]) ? $_POST["foreground"] : "#000000";
        $label = isset($_POST["label"]) ? $_POST["label"] : "Sterenova";

        //convert hex to rgb
        $background = sscanf($background, "#%02x%02x%02x");
        $foreground = sscanf($foreground, "#%02x%02x%02x");


        $generator = new GenerateQr();

        $generator->generate($url, $foreground, $background, $label); // Génère le QR code

        $generator->display(); // Affiche le QR code

        //$generator->download(); // Télécharge le QR code




    }
}
