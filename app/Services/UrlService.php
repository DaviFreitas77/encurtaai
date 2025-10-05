<?php

namespace App\Services;

use App\Services\QrCodeService;
use Illuminate\Support\Collection;

class UrlService
{
    public function __construct() {}


    public function get_all_user_url()
    {
        $allUrl = config('urls.data');
        $allUrlCollection = collect($allUrl);
        $urlsUser = $allUrlCollection->where('fk_user', 1);
        return $urlsUser;
    }
}
