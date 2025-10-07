<?php

namespace App\Services;

use App\Services\QrCodeService;
use Illuminate\Support\Collection;

class DashboardService
{
    public function __construct(private QrCodeService $qrCodeService, private UrlService $urlService) {}


    public function get_all_user_url()
    {
        return $this->urlService->get_url();
    }

    public function get_all_data_for_user_dashboard()
    {
        return $this->urlService->get_status_url();
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

    public function get_latest_user_url()
    {
        return $this->urlService->latest_url();
    }
}
