<?php

namespace App\Http\Controllers\admin;

use App\Helpers;
use App\Services\UrlService;
use App\Services\UserService;
use Illuminate\Http\Request;

class dashboardController

{
    public function __construct(private UserService $userService, private UrlService $urlService) {}


    public function showDashboard()
    {

        $allUrl = $this->urlService->get_all_url();
        $statusUrl = $this->urlService->get_status_url();
        $totalUsers = $this->userService->all_user();


        return view('admin.secret-dashboard', [
            'totalActive' => $statusUrl['active'],
            'totalInactive' => $statusUrl['inactive'],
            'totalExpired' => $statusUrl['expired'],
            'totalUsers' => $totalUsers,
            'allUrl' => $allUrl
        ]);
    }
}
