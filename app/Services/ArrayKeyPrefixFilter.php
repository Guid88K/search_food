<?php

namespace App\Services;

final class ArrayKeyPrefixFilter
{
    public static function filter(array $data, string $keyName): array
    {
        return \array_filter($data, function ($key) use ($keyName) {
            return \str_starts_with($key, $keyName);
        }, ARRAY_FILTER_USE_KEY);
    }
}
