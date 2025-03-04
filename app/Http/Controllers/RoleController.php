<?php

namespace App\Http\Controllers;
// use App\Models\Role;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

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


    public function permissions()
    {

        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Client']);

        $permission = Permission::create(['name' => 'Admin']);
        $permission2 = Permission::create(['name' => 'Client']);

        $role->syncPermissions($permission);
        $role2->syncPermissions($permission2);

        // $role = Role::findById(1);
        // $role->($permission);

        // $user = User::find(1);


    }
}
