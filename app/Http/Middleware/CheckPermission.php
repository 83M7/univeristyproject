<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $permission)
    {
        $user = Auth::user();
        if (!$user) return redirect('login');
    
        $role = $user->role;
        if (!$role || !$role->permissions->pluck('permissions_name')->contains($permission)) {
            abort(403, 'Unauthorized');
        }
    
        return $next($request);
    }
}
