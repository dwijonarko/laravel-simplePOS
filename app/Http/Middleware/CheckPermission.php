<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $permission = explode('|', $permission);
        if ($this->checkPermission($permission)) {
            return $next($request);
        }

        return response()->view('errors.check-permission');
    }

    protected function checkPermission($permissions)
    {
        $userAccess = $this->getMyPermission(auth()->user()->level);
        foreach ($permissions as $key => $value) {
            if ($value == $userAccess) {
                return true;
            }
        }
        return false;
    }


    protected function getMyPermission($id)
    {
        switch ($id) {
            case 1:
                return 'admin';
                break;
            case 2:
                return 'superadmin';
                break;
            default:
                return 'user';
                break;
        }
    }
}
