<?php

namespace App\Services;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeService
{

    public function generateForUrl(string $url)
    {
        if (empty($url)) {
            return null;
        }
        return QrCode::size(200)->generate($url);
    }
}
