<?php

namespace App\Interface;

/**
 * interface for crypt word
 * @auther anjanianamamisoa@gmail.com
 */
interface CryptInterafe
{
    /**
     * @return array
     */
    public function getKey(): array;

    /**
     * @return string
     */
    public function getWordReversed(): string;
}
