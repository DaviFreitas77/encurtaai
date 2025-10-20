<?php

namespace App\Services;

use App\Helpers;
use App\Models\Url;
use Illuminate\Contracts\Debug\ShouldntReport;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UrlService
{
    public function __construct(private QrCodeService $qrCodeService) {}


    public function get_all_url()
    {
        return Url::all()->count();
    }

    public function get_url()
    {
        $userId = Auth::id();
        return Url::where('fk_user', $userId)->where('qr_code_url', null)->get();
    }

    public function get_qr_code()
    {
        $userId = Auth::id();
        return Url::where('fk_user', $userId)->whereNotNull('qr_code_url')->get();
    }

    public function get_status_url()
    {
        $userId = Auth::id();
        $urlUser =  Url::where('fk_user', $userId)->get();
        $totalClick = $urlUser->sum('click_count');
        $topLink = $urlUser->sortByDesc('click_count')->first();

        return [
            'total' => $urlUser->count(),
            'totalClick' => $totalClick,
            'topLink' => $topLink
        ];
    }

    public function create_shoterned_url(array $validatedData): Url
    {
        $slug = $validatedData['slug'] ?? Helpers::gerarSlugSimples();

        $url = new Url();
        $url->name_url = $validatedData['name_url'] ?? null;
        $url->url_original = $validatedData['url_original'];
        $url->slug = $slug;
        $url->click_count = 0;
        $url->status = 'active';
        $url->limited_clicks = $validatedData['limited_clicks'] ?? null;
        $url->expiration_date = $validatedData['expiration_date'] ?? null;
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

    public function qr_code_for_url(string $url)
    {
        return $this->qrCodeService->generateForUrl($url);
    }

    public function delete_url(int $id)
    {
        return Url::where('id', $id)->delete();
    }
}
