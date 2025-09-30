<?php

namespace App\Http\Controllers\client;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class dashboardUserController
{

    private function countAllUrl(int $id)
    {
        $url = new Url;
        $url->where('id', $id)->where('status', 'active')->count();
        return $url;
    }
    private function countActiveUrl(int $id)
    {
        $url = new Url;
        $url->where('id', $id)->where('status', 'active')->count();
        return $url;
    }
    private function countInactiveUrl(int $id)
    {
        $url = new Url;
        $url->where('id', $id)->where('status', 'inactive')->count();
        return $url;
    }
    private function countExpiredUrl(int $id)
    {
        $url = new Url;
        $url->where('id', $id)->where('status', 'expired')->count();
        return $url;
    }

    private function topClickUrl($id)
    {
        $url = new Url;
        $topClick = $url->where('id', $id)
            ->orderBy('click_count', 'desc')
            ->take(10)->get();
        return $topClick;
    }

    public function showDashboardUser()
    {
        $allUrl = config('urls.data');
        $urlsCollection = collect($allUrl);

        $allUrlUser = $urlsCollection->where('fk_user', 1);
        $activeUrlUser = $allUrlUser->where('status', 'active')->count();
        $inactiveUrlUser = $allUrlUser->where('status', 'inactive')->count();
        $expiredUrlUser = $allUrlUser->where('status', 'expired')->count();

        return view('client.home', [
            'allUrlUser' => $allUrlUser,
            'activeUrlUser' => $activeUrlUser,
            'inactiveUrlUser' => $inactiveUrlUser,
            'expiredUrlUser' => $expiredUrlUser
        ]);
    }

    public function topClick()
    {
        $allUrl = config('urls.data');
        $urlsCollection = collect($allUrl);

        $allUrlUser = $urlsCollection->where('fk_user', 1);
        $urls = $allUrlUser->sortByDesc('click_count')->take(10);
        return view('client.top-click', [
            'urls' => $urls
        ]);
    }
}
