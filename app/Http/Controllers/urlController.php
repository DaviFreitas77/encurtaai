<?php

namespace App\Http\Controllers;


use App\Models\Url;
use App\Helpers;
use Illuminate\Http\Request;

class urlController extends Controller
{
    public function shortenedUrl(Request $request)
    {
        $validate = $request->validate([
            'url_original' => ['required'],
            'password_url' => ['nullable', 'min:4'],
            'slug' => ['nullable', 'min:4', 'max:20', 'unique:tb_url,slug']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'slug.unique' => 'Este slug já está em uso.'
        ]);
        $url = new Url;

        $slug = Helpers::gerarSlugSimples(5);

        while (Url::where('slug', $slug)->exists()) {
            $slug = Helpers::gerarSlugSimples(10);
        }



        $url->url_original = $validate['url_original'];
        $url->slug = $validate['slug'] ?  $validate['slug'] : $slug;
        $url->click_count = 0;
        $url->status = 'active';
        $url->save();

        return response()->json([
            'url_shortened' => env('APP_URL') . '/r/' . $url->slug
        ]);
    }

    public function redirect(Request $request, string $slug)
    {
        $url = Url::where('slug', $slug)->first();

        if (!$url) {
            return redirect('/404');
        }

        $url->click_count++;
        $url->save();

        if ($request->expectsJson()) {
            return response()->json([
                'url_original' => $url->url_original
            ]);
        }

        return redirect($url->url_original);
    }
}
