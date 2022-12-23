<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $age = $request->age;

        if ($age < 20) {
            return redirect()->route('home')->with('errors', 'Umur kamu masih bawah 20 tahun');
        }

        return $next($request);
    }
}
