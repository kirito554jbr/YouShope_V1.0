<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create(Request $request)
    {
        // Role::creat([
        //     'rolename' => 'Client'
        // ]);
        Role::create([
            'rolename' => $request['rolename']
        ]);
    }
}
