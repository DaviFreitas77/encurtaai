<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QrCodeController
{
    public static function generate($url)
    {

        $qrCode = QrCode::size(200)->generate($url);

        return $qrCode;
    }
}
