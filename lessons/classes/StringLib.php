<?php

namespace Utils;

class StringLib
{

    private const DEFAULT_CHARSET = 'UTF-8';

    public static function mbReverseString(
        string $text,
        string $encoding = self::DEFAULT_CHARSET
    ): string {
        $convertTextToWin = mb_convert_encoding($text, 'windows-1251', $encoding);
        $reverseText = strrev($convertTextToWin);

        return mb_convert_encoding($reverseText, $encoding, 'windows-1251');
    }
}
