<?php

namespace App\Http\Middleware;

use App\Models\UserRole;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = session()->get('active_role');
                if ($role->role_id == 1) {
                    return redirect(route('admin.dashboard-admin'));
                }
                if ($role->role_id == 2) {
                    return redirect(route('dosen.daftar-mahasiswa'));
                }
                if ($role->role_id == 3) {
                    return redirect(route('admin.dashboard-admin'));
                }
                if ($role->role_id == 4) {
                    return redirect(route('user.home'));
                }
                if ($role->role_id == 5) {
                    return redirect(route('penguji.daftar-sempro'));
                }
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
