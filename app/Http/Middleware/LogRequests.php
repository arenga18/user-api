<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Request Received:', [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'body' => $request->all()
        ]);

        return $next($request);
    }
}
