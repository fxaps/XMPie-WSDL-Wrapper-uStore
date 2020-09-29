<?php

namespace XMPieWsdlClient\XMPie\Utilities;


class Formatter
{
    public static function fixServerUrl($url = '', $prefix = 'http://', $suffix = "/")
    {
        if (self::endsWith($url, $suffix) === false) {
            $url = $url . $suffix;
        }

        if (
            self::startsWith($url, $prefix) === false &&
            self::startsWith($url, "http://") === false &&
            self::startsWith($url, "https://") === false
        ) {
            $url = $prefix . $url;
        }

        return $url;
    }

    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return $length === 0 || (substr($haystack, -$length) === $needle);
    }
}