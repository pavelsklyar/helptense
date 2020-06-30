<?php

namespace App\Http\Middleware;

use App\Model\Role;
use App\Model\UserHasRole;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check()) {
            $role = Role::where('name', 'administrator')->first();
            $user_id = Auth::user()->id;

            $userRole = UserHasRole::where([
                ['user_id', Auth::user()->id],
                ['role_id', $role->id]
            ])->get();

            if (!$userRole->count()) {
                abort(403, 'Unauthorized action.');
            }
        }

        return $next($request);
    }
}
