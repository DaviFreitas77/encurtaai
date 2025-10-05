<?php

namespace App\Services;

use App\Services\QrCodeService;
use Illuminate\Support\Collection;

class UserService
{
    public function __construct(private QrCodeService $qrCodeService) {}


    public function get_all_user_url()
    {
        $allUrl = config('urls.data');
        $allUrlCollection = collect($allUrl);
        $urlsUser = $allUrlCollection->where('fk_user', 1);
        return $urlsUser;
    }

}
