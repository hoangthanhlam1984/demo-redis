<?php

namespace App\Http\Controllers;

use App\Actions\Redis\DecreaseValueInCacheAction;
use App\Actions\Redis\IncreaseValueInCacheAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RedisController extends Controller
{
    public function increase(Request $request, IncreaseValueInCacheAction $increaseValueInCacheAction)
    {
        $value = $increaseValueInCacheAction->execute('redis-key-value');

        echo $value;
    }

    public function decrease(Request $request, DecreaseValueInCacheAction $decreaseValueInCacheAction)
    {
        $value = $decreaseValueInCacheAction->execute('redis-key-value');

        echo $value;
    }
}
