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
            'slug' => ['nullable', 'min:4', 'max:10', 'unique:tb_url,slug'],
            'name_url' => ['nullable', 'min:4', 'max:10'],
            'limited_clicks' => ['nullable'],
            'expiration_date' => ['nullable', 'after:now']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 10 caracteres.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'url_original.url' => 'O campo URL deve ser uma URL válida.',
            'name_url.min' => 'O nome do link deve ter no mínimo 4 caracteres.',
            'name_url.max' => 'O nome do link deve ter no máximo 10 caracteres',
            'expiration_date' => 'A data de expiração deve ser maior que a data atual.',


        ]);

        $url = $this->urlService->create_shoterned_url($validate);

        if (!Auth::check()) {
            session()->increment('urls');
        }

        return response()->json([
            'url_shortened' => url('/r/' . $url->slug)
        ]);
    }


    public function create_qr_code(Request $request)
    {
        $validate = $request->validate([
            'url_qr_code' => ['required', 'url'],
            'name_url' => ['nullable', 'min:4', 'max:10']
        ], [
            'url_qr_code.required' => 'Este campo é obrigatório.',
            'url_qr_code.url' => 'URL inválida',
            'name_url.min' => 'O nome deve ter no mínimo 4 caracteres.',
            'name_url.max' => 'O nome deve ter no máximo 10 caracteres.',
        ]);

        $shotenUrl = $this->urlService->create_shoterned_url(['url_original' => $validate['url_qr_code'], 'name_url' => $validate['name_url']]);

        $url = url('/r/' . $shotenUrl->slug);
        $qrCode = $this->urlService->qr_code_for_url($url);
        $qrCodeSvgString = $qrCode->toHtml();

        $locationUrl = Url::where('slug', $shotenUrl->slug)->first();
        $locationUrl->qr_code_url = $qrCodeSvgString;
        $locationUrl->save();

        return response()->json([
            'qr_code' => $qrCodeSvgString,
            'id' => $locationUrl->id
        ]);
    }

    public function create_qr_code_url_existing(Request $request)
    {
        $validate = $request->validate([
            'url' => ['required', 'url'],
            'nameCard' => ['nullable', 'min:4', 'max:10'],
            'slug' => ['min:4', 'max:10']
        ], [
            'url' => 'Este campo é obrigatório.',
            'url' => 'URL inválida',
            'name.min' => 'O nome deve ter no mínimo 4 caracteres.',
            'name.max' => 'O nome deve ter no máximo 10 caracteres.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 10 caracteres.',
        ]);

        $url = $this->urlService->qr_code_for_url_existing($validate);

        return response()->json([
            'qr_code' => $url['qr']->toHtml(),
            'uslug' => $url['url']->slug

        ]);
    }

    public function get_url_user_logged()
    {
        $urls = $this->urlService->get_url();
        return response()->json([
            'urls' =>  $urls
        ]);
    }

    public function get_qr_code_user_logged()
    {
        $qrCodes = $this->urlService->get_qr_code();
        return response()->json([
            'qrCodes' =>  $qrCodes
        ]);
    }

    public function url_analytics()
    {
        $urls = $this->urlService->get_status_url();
        return response()->json([
            'totalurls' =>  $urls['total'],
            'totalClick' =>  $urls['totalClick'],
            'topLink' => $urls['topLink']

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

    public function delete_url(int $id)
    {
        $this->urlService->delete_url($id);

        return response()->json([
            'message' => 'Link excluído com sucesso!',
        ]);
    }
}
