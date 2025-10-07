<?php

namespace App\Services;

use App\Helpers;
use App\Models\Url;
use Illuminate\Contracts\Debug\ShouldntReport;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UrlService
{
    public function __construct() {}


    public function get_url()
    {
        $userId = Auth::id();
        return Url::where('fk_user', $userId)->get();
    }

    public function get_status_url()
    {
        $userId = Auth::id();
        $urlUser =  Url::where('fk_user', $userId)->get();
        $activeUrl = $urlUser->where('status', 'active')->count();
        $inactiveUrl = $urlUser->where('status', 'inactive')->count();
        $expiredUrl = $urlUser->where('status', 'expired')->count();

        return [
            'active' => $activeUrl,
            'inactive' => $inactiveUrl,
            'expired' => $expiredUrl,
        ];
    }

    public function create_shoterned_url(array $validatedData): Url
    {
        $slug = $validatedData['slug'] ?? Helpers::gerarSlugSimples();

        $url = new Url();
        $url->url_original = $validatedData['url_original'];
        $url->slug = $slug;
        $url->click_count = 0;
        $url->status = 'active';
        $url->fk_user = Auth::id();
        $url->save();

        return $url;
    }

    public function process_redirect(string $slug)
    {
        $url = Url::where('slug', $slug)->first();

        if ($url) {
            $url->increment('click_count');
        }

        return $url;
    }

    public function latest_url()
    {
        $userId = Auth::id();
        return Url::where('fk_user', $userId)->orderBy('created_at', 'desc')->take(5)->get();
    }
}
