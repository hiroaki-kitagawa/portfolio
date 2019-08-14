<?php

namespace App\Http\Middleware;

use Closure;

class ResponseHeader
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
        return $next($request);

        // キャッシュコントロール対策：デフォルトでキャッシュさせるよう明示的に記載する
        $response->header('Cache-Control', 'no-cache, private');

        // クリックジャッキング対策
        // iframeを使用しない
        $response->header('X-Frame-Options', 'DENY');

        // XSS対策（文字コードの脆弱性対応）
        // UTF-8を明示的に記載する
        $response->header('Content-Type', 'charset=UTF-8');

        return $response;
    }
}
