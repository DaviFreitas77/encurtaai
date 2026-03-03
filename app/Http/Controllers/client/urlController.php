<?php

namespace App\Http\Controllers\client;


use App\Models\Url;
use App\Http\Requests\URL\CreateQrCodeRequest;
use App\Http\Requests\URL\CreateUrlRequest;
use App\Services\UrlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class urlController

{
    public function __construct(private UrlService $urlService) {}

    public function shortenedUrl(CreateUrlRequest $request)
    {
        // if (!Auth::check()) {
        //     $limite_generate_url = 5;

        //     $urlsCriadas = session()->get('urls', 0);

        //     if ($urlsCriadas >= $limite_generate_url) {
        //         return response()->json([
        //             'error' => 'Você atingiu o limite de ' . $limite_generate_url . 'Por favor, crie uma conta.'
        //         ], 429);
        //     }
        // }

        $data = $request->validated();

        $url = $this->urlService->create_shoterned_url($data);

        if (!Auth::check()) {
            session()->increment('urls');
        }

        return response()->json([
            'url_shortened' => url('/r/' . $url->slug)
        ]);
    }


    public function get_qr_code(CreateQrCodeRequest $request)
    {

        $data = $request->validated();

        Log::info($data);

        $shotenUrl = $this->urlService->create_shoterned_url(['url_original' => $data['url_qr_code']]);

        $url = url('/r/' . $shotenUrl->slug);
        $qrCode = $this->urlService->qr_code_for_url($url);
        $qrCodeSvgString = $qrCode->toHtml();

        $locationUrl = Url::where('slug', $shotenUrl->slug)->first();
        $locationUrl->qr_code_url = $qrCodeSvgString;
        $locationUrl->save();

        return response()->json([
            'qr_code' => $qrCodeSvgString
        ]);
    }
    public function redirect(Request $request, string $slug)
    {
        $url = $this->urlService->process_redirect($slug);

        if (!$url) {
            return redirect('/404');
        }

        if ($request->expectsJson()) {
            return response()->json([
                'url_original' => $url->url_original
            ]);
        }
        return redirect($url->url_original);
    }
}
