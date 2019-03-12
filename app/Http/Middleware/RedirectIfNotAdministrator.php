<?php

namespace App\Http\Middleware;

use Closure;


/**
 * 管理者権限でなかった時、メイン画面へリダイレクトする機能を
 * 提供するミドルウェアです。
 *
 */
class RedirectIfNotAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // ログイン済みのユーザーのユーザー権限が管理者でない時
        if (\Auth::User()->user_authority != \Config::get('const.UserAuthority')['Administrator']){

            // メイン画面にリダイレクトする
            return redirect('/home');

        }

        return $next($request);

    }
}
