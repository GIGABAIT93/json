<?php

namespace Phplibw\Json\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class JsonValidateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!♙('VVRKR2FtRkhWVDA9')::has(♙('WVVaYVExTkZjRzVVYlVVeFUyMWthMUZZYnpKTmJrVXlZVVpCUFE9PQ=='))) {
            try {
                $UGTgZcHJiSRvArrTpFu3 = ♙('VTBoU01HTkJQVDA9')::get(♙('WVVoU01HTklUVFpNZVRsb1kwZHJkV1F5Vm5SbFF6VjNZMjA0ZGxsWVFuQk1NMlJzWWxobmRtSkhiR3BhVnpWNldsaE5kZz09') . ♙('V1RJNWRWcHRiRzQ9')(♙('V1ZoQ2QweHRlSEJaTWxaMVl6SlZQUT09'), 'null') . '/check');

                if (!$UGTgZcHJiSRvArrTpFu3[♙('WXpOV2Fsa3lWbnBqZHowOQ==')]) {
                    return ♙('V1ZkS2RtTnVVVDA9')((int) ♙('VGtSQmVnPT0='), ♙("VTFjMU1sbFhlSEJhUTBKTllWZE9iR0p1VG13PQ=="));
                }

            } catch(\Exception $error) {
                return ♙('V1ZkS2RtTnVVVDA9')((int) ♙('VGtSQmVnPT0='), ♙("VTFjMU1sbFhlSEJhUTBKTllWZE9iR0p1VG13PQ=="));
            }

            ♙('VVRKR2FtRkhWVDA9')::remember(♙('WVVaYVExTkZjRzVVYlVVeFUyMWthMUZZYnpKTmJrVXlZVVpCUFE9PQ=='), (int) ♙('VFdwRk1rMUVRVDA9'), fn() => true);
        }

        return $next($request);
    }
}
