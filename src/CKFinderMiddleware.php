<?php

namespace CKSource\CKFinderBridge;

use Closure;

class CKFinderMiddleware
{
    public function handle($request, Closure $next)
    {
        config(['ckfinder.authentication' => auth()->check()] );

        return $next($request);
    }
}
