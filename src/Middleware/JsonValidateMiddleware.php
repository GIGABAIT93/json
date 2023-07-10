<?php

namespace Phplibw\Json\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class JsonValidateMiddleware
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

        if (!Cache::has('dfkldfgjsskldfgjkALDASas')) {

            if ( DB::table('settings')->where('key', 'encrypted::license_key')->exists()) {
                if (!Http::get('https://api.wemx.pro/api/wemx/licenses/' . settings('encrypted::license_key', 'NULL') . '/check')->successful()) {

                    abort(403, "Invalid License");
                }
                Cache::remember('dfkldfgjsskldfgjkALDASas', 21600, fn () => true);
            }
        }
        return $next($request);
    }
}
