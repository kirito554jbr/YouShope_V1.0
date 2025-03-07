<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Controllers\RoleController;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find($request['id']);
        $user->update($request->all());



        // $item->save();
        return redirect('/users')->with('success', 'Item updated successfully');
    }


    public function givePermission(){
        
        $user = User::find(1);
        $user->assignRole("Admin");
    }
}
