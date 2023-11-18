<?php

namespace App\Actions\Redis;

use Illuminate\Support\Facades\Cache;

class IncreaseValueInCacheAction
{
    public function execute(string $key): int
    {
        $value = Cache::get($key);

        if (empty($value)) {
            $value = 0;
        }

        $value++;
        Cache::forever($key, $value);

        return Cache::get($key);
    }
}
