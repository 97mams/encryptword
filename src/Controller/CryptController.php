<?php

namespace App\Controller;

use App\Interface\CryptInterface;

/**
 *  reverse and mask a character string
 * @auther anjaniainamamisoa@gmail.com
 */
class CryptController implements CryptInterface
{

    private const ROOTWORD = 'abcdefghijklmnopqrstuvwxyz';

    public function __construct(
        private string $word
    ) {
    }

    public function getKey(): array
    {
        $word = str_split($this->word);
        $alphabet = str_split(self::ROOTWORD);
        $alphabetArrayKey = [];
        for ($i = 0; $i < count($word); $i++) {
            for ($y = 0; $y < count($alphabet); $y++) {
                if ($word[$i] === $alphabet[$y]) {
                    $alphabetArrayKey[] = $y;
                }
            }
        }

        return $alphabetArrayKey;
    }

    public function getWordReversed(): string
    {
        $alphabetRevese = array_reverse(str_split(self::ROOTWORD));
        $keyWord = $this->getKey();
        $wordReverse = [];
        for ($i = 0; $i < count($keyWord); $i++) {
            foreach ($alphabetRevese as $key => $value) {
                if ($key === $keyWord[$i]) {
                    $wordReverse[] = $value;
                }
            }
        }
        return implode($wordReverse);
    }
}
