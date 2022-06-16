<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $locales = config('locales.languages');

        // http://127.0.0.1:8000/en/posts 
        // /e >>>> one segment
        // Check >> found en,ar,ca in route Or Not && it's not found >> Adding this en,ar,ca 

        if(!array_key_exists($request->segment(1), $locales)){
            $segments = $request->segments();
            $segments = Arr::prepend($segments,$locales);
            return redirect()->to(implode('/',$segments));
        }

        return $next($request);
    }
}
