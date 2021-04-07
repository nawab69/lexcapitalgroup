<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkKyc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->kyc->id_status != 'approved'){
            return back()->with('errors','Please Verify Your Kyc First');
        }
        return $next($request);
    }
}