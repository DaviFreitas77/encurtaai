<?php

namespace App\Services;

use App\Services\QrCodeService;
use Illuminate\Support\Collection;

class DashboardService
{
    public function __construct(private QrCodeService $qrCodeService) {}


    public function get_all_user_url()
    {
        $allUrl = config('urls.data');
        $allUrlCollection = collect($allUrl);
        $urlsUser = $allUrlCollection->where('fk_user', 1);
        return $urlsUser;
    }

    public function get_all_data_for_user_dashboard()
    {
        $allUrl = config('urls.data');
        $allUrlCollection = collect($allUrl);
        $urlsUser = $allUrlCollection->where('fk_user', 1);
        $activeUrlUser = $urlsUser->where('status', 'active')->count();
        $inactiveUrlUser = $urlsUser->where('status', 'inactive')->count();
        $expiredUrlUser = $urlsUser->where('status', 'expired')->count();

        return [
            'active' => $activeUrlUser,
            'inactive' => $inactiveUrlUser,
            'expired' => $expiredUrlUser,
        ];
    }
    public function get_url_for_qr_code(string $data)
    {
        return $this->qrCodeService->generateForUrl($data);
    }

    public function apply_order_in_urls(Collection $urls, ?string $order)
    {

        $orderBy = $order ?? 'relevance';

        switch ($orderBy) {
            case 'relevance':
                return $urls->sortBy('id');

            case 'recent':
                return $urls->sortBy('created_at');

            case 'expired':
                return $urls->where('status', 'expired');

            case 'active':
                return $urls->where('status', 'active');

            case 'inactive':
                return $urls->where('status', 'inactive');


            case 'moreClick':
                return $urls->sortByDesc('click_count');


            case 'lessClick':
                return $urls->sortBy('click_count');

            default:
                return $urls;
        }
    }
}
