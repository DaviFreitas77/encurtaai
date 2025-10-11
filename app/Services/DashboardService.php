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
                return response()->json([
                    'urls' =>  $urls->sortBy('id')
                ]);

            case 'recent':
                return response()->json([
                    'urls' =>  $urls->sortBy('created_at')
                ]);

            case 'expired':
                return response()->json([
                    'urls' =>  $urls->where('status', 'expired')
                ]);

            case 'active':
                return response()->json([
                    'urls' =>  $urls->where('status', 'active')
                ]);

            case 'inactive':
                return response()->json([
                    'urls' =>  $urls->where('status', 'inactive')
                ]);


            case 'moreClick':
                return response()->json([
                    'urls' =>  $urls->sortByDesc('click_count')
                ]);

            case 'lessClick':
                return response()->json([
                    'urls' =>  $urls->sortBy('click_count')
                ]);

            default:
                return response()->json([
                    'urls' =>  $urls
                ]);
        }
    }

    public function get_latest_user_url()
    {
        return $this->urlService->latest_url();
    }
}
