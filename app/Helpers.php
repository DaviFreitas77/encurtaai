<?php

namespace App;

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

    public static function countUrlActive(array $urls): int
    {
        $cont = 0;

        foreach ($urls as $url) {
            if ($url['status'] === 'active') {
                $cont++;
            }
        }
        return $cont;
    }
    public static function countUrlInactive(array $urls): int
    {
        $cont = 0;
        foreach ($urls as $url) {
            if ($url['status'] === 'inative') {
                $cont++;
            }
        }
        return $cont;
    }
    public static function countUrlExpired(array $urls): int
    {
        $cont = 0;
        foreach ($urls as $url) {
            if ($url['status'] === 'expired') {
                $cont++;
            }
        }
        return $cont;
    }

    public static function countUsers(array $users): int
    {
        return count($users);
    }
}
