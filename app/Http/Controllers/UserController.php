<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find($request['id']);
        $user->update($request->all());



        // $item->save();
        return redirect('/users')->with('success', 'Item updated successfully');
    }
}
