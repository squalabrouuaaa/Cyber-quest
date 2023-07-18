<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyIsMJ 
{
    
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->is_mj) {
            return response()->json([
                'status'  => 'error',
                'message' => 'No access',
            ], 400);
        }
        return $next($request);
    }
}
