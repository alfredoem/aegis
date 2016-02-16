<?php namespace App\Http\Middleware;

use Alfredoem\Ragnarok\AuthRagnarok;
use Closure;

class Authenticate
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
        if (! AuthRagnarok::check()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('/auth/login');
            }
        }

        return $next($request);
    }
}
