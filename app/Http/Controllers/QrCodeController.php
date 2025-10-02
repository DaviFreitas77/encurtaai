<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController
{
    public static function generate($url)
    {

        $qrCode = QrCode::size(100)->generate($url);

        return $qrCode;
    }
}
