<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    function switchRole(Request $request, $roleId)
    {
        foreach (session('roles') as $role) {
            if ($role->role_id == $roleId) {
                session()->put('active_role', $role);
            }
        }
        return redirect(route('login'));
    }
}
