<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class VerifyIsMJ extends Middleware
{
    
    public function handle(Request $request)
    {
        if (!$request->user()->isMJ()) {
            return json_encode();
        }
    }
}
