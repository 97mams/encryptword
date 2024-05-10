<?php

namespace App\Interface;

/**
 * interface for crypt word
 * @auther anjanianamamisoa@gmail.com
 */
interface CryptInterafe
{
    /**
     * @param array $word
     * @param array $rootWord
     * @return array
     */
    public function getKey(array $word, array $rootWord): array;

    /**
     * @param array $word
     * @param array $rootWord
     * @return string
     */
    public function getWordReversed(array $word, array $rootWord): string;
}
