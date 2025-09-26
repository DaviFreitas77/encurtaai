<?php

namespace App\Http\Controllers\admin;

use App\Helpers;
use Illuminate\Http\Request;

class dashboardController
{
    private function countUrlActive($urls): int
    {
        $totalActive =  Helpers::countUrlActive($urls);
        return $totalActive;
    }

    private function countUrlInactive($urls): int
    {
        $totalInactive =  Helpers::countUrlInactive($urls);
        return $totalInactive;
    }

    private function countUrlExpired($urls): int
    {
        $totalExpired =  Helpers::countUrlExpired($urls);
        return $totalExpired;
    }


    private function countUsers($users): int
    {
        $totalUsers =  Helpers::countUsers($users);
        return $totalUsers;
    }



    public function showDashboard()
    {

        $allUrl = config('urls.data');
        $allUsers = config('users.data');

        $totalActive = $this->countUrlActive($allUrl);
        $totalInactive = $this->countUrlInactive($allUrl);
        $totalExpired = $this->countUrlExpired($allUrl);

        $totalUsers = $this->countUsers($allUsers);

        
        return view('admin.secret-dashboard', [
            'totalActive' => $totalActive,
            'totalInactive' => $totalInactive,
            'totalExpired' => $totalExpired,
            'totalUsers' => $totalUsers,
        ]);
    }
}
