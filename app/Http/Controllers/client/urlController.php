<?php

namespace App\Http\Controllers\client;


use App\Models\Url;
use App\Helpers;
use App\Services\UrlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class urlController

{
    public function __construct(private UrlService $urlService) {}

    public function shortenedUrl(Request $request)
    {
        if (!Auth::check()) {
            $limite_generate_url = 5;

            $urlsCriadas = session()->get('urls', 0);

            if ($urlsCriadas >= $limite_generate_url) {
                return response()->json([
                    'error' => 'Você atingiu o limite de ' . $limite_generate_url . 'Por favor, crie uma conta.'
                ], 429);
            }
        }

        $validate = $request->validate([
            'url_original' => ['required', 'url'],
            'password_url' => ['nullable', 'min:4'],
            'slug' => ['nullable', 'min:4', 'max:20', 'unique:tb_url,slug']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'url_original.url' => 'O campo URL deve ser uma URL válida.'
        ]);

        $url = $this->urlService->create_shoterned_url($validate);

        if (!Auth::check()) {
            session()->increment('urls');
        }

        return response()->json([
            'url_shortened' => url('/r/' . $url->slug)
        ]);
    }


    public function get_qr_code(Request $request)
    {
        $validate = $request->validate([
            'url_qr_code' => ['required', 'url'],
        ], [
            'url_qr_code.required' => 'O campo URL é obrigatório.',
            'url_qr_code.url' => 'O campo URL deve ser uma URL válida.'
        ]);

        $shotenUrl = $this->urlService->create_shoterned_url(['url_original' => $validate['url_qr_code']]);

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
