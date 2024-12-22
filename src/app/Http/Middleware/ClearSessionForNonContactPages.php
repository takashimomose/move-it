<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClearSessionForNonContactPages
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
        // セッションに保存されているcontact_dataを消去する
        if (!in_array($request->path(), ['contact', 'contact/confirm'])) {
            // /contact と /contact/confirm 以外のページにアクセスした場合、セッションを消去
            $request->session()->forget('contact_data');
        }

        return $next($request);
    }
}
