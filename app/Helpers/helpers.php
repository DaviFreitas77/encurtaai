<?php

namespace App\Helpers;
class Helpers
{

    public static function gerarSlugSimples(int $length = 8): string
    {
        // Define os caracteres permitidos no slug
        $caracteres = 'abcdefghijklmnopqrstuvwxyz0123456789';

        // Embaralha os caracteres e pega uma parte da string para formar o slug
        $slug = substr(str_shuffle($caracteres), 0, $length);

        return $slug;
    }
}
