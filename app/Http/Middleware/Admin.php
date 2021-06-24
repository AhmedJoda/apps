<?php
namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (!isAdmin()) {
            return redirect(url('admin/login'));
        } elseif (isAdmin()) {
            return $next($request);
        } else {
            return abort('404');
        }
    }
}
