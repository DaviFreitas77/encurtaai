<?php

namespace App\Http\Controllers\client;


use App\Services\DashboardService;
use App\Models\Url;
use Illuminate\Http\Request;


class dashboardUserController
{

    public function __construct(private DashboardService $dashboardService) {}

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

    public function showDashboardUser(Request $request)
    {

        $filters = $request->only(['order', 'url_original', 'url_slug']);
        if (empty($filters['order'])) {
            $filters['order'] = 'relevance';
        }

        $urls = $this->dashboardService->get_all_user_url();
        $infoUrlUser = $this->dashboardService->get_all_data_for_user_dashboard();
        $currentOrder = $this->dashboardService->apply_order_in_urls($urls, $filters['order']);

        $newQRCode = $this->dashboardService->get_url_for_qr_code($filters['url_original'] ?? '');

        return view('client.home', [
            'allUrlUser' =>  $urls,
            'activeUrlUser' =>  $infoUrlUser['active'],
            'inactiveUrlUser' => $infoUrlUser['inactive'],
            'expiredUrlUser' => $infoUrlUser['expired'],
            'currentOrder' => $currentOrder,
            'qrCode' => $newQRCode,
            'slugForQr' => $filters['url_slug'] ?? ''
        ]);
    }

    public function myQrCode()
    {
        $allUrl = config('urls.data');
        $urlsCollection = collect($allUrl);
        $urls = $urlsCollection->where('fk_user', 1);


        return view('client.qr-code', [
            'urls' => $urls

        ]);
    }
}
