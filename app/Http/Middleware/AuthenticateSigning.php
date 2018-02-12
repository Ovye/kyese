<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateSigning
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$redirectUrl = url()->current();
		if (!Auth::check()) {
			return redirect("/login?rd={$redirectUrl}/");
		}

		return $next($request);
	}
}
