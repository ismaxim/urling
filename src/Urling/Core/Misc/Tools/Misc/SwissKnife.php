<?php

namespace Urling\Core\Misc\Tools\Misc;

trait SwissKnife
{
    /**
     * @param string $resource
     *
     * @return string
     */
    public static function truncateExtraSlashes(string $resource): string
    {
        return str_replace(':/', '://', trim((string) preg_replace('/\/+/', '/', $resource), '/'));
    }

    /**
     * @param string|null $string
     * @param string|null $_string
     *
     * @return bool
     */
    public static function isSameStrings(?string $string, ?string $_string): bool
    {
        return !strcmp((string) $string, (string) $_string);
    }

    /**
     * @param string $context
     * @param string $separator
     * @param string $connector
     *
     * @return string
     */
    public static function createSlug(string $context, string $separator = " ", string $connector = "-"): string
    {
        // Contains only letters in unicode and "$connector"
        $prepared_context = preg_replace("/\PL{$connector}+/iu", $separator, $context);

        // Replace all whitespaces to single whitespace
        $prepared_context = preg_replace("/\s+/", $separator, mb_strtolower(trim((string) $prepared_context)));

        // Replace separation between part with connector
        $slug = str_replace($separator, $connector, mb_strtolower(trim((string) $prepared_context)));

        return $slug;
    }
}
