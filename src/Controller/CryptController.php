<?php

namespace App\Controller;

use App\Interface\CryptInterafe;

/**
 *  reverse and mask a character string
 * @auther anjaniainamamisoa@gmail.com
 */
class CryptController implements CryptInterafe
{

    private string $word;
    private const ROOTWORD = 'abcdefghijklmnopqrstuvwxyz';

    public function __construct()
    {
    }

    public function getKey(array $word, array $rootWord): array
    {
        $tab = [];
        for ($i = 0; $i < count($word); $i++) {
            for ($y = 0; $y < count($alph); $y++) {
                if ($word[$i] === $alph[$y]) {
                    $tab[] = $y;
                }
            }
        }

        return $tab;
    }

    public function getWordReversed(array $word, array $rootWord): string
    {
        return '';
    }
}
