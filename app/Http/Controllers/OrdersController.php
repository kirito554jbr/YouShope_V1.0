<?php

namespace App\Http\Controllers;

use App\Models\orderd_items;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function create(Request $request)
    {

        // $user = User::find($request['user_id']);
        // $user->


        Orders::create([
            'user_id' => auth()->id(),
            'status' => "Pending",
            'Prix_Total' => $request['Prix_Total'],
            'Adress' => "adress"
        ]);

        

        foreach((array) session('cart') as $id => $details){
            orderd_items::create([
                'product_id' => auth()->id(),
                'status' => "Pending",
                'Prix_Total' => $details['Prix_Total'],
                'Adress' => "adress"
            ]);

        }



        return redirect('/ProductsCalient')->with('success', 'Item created successfully');
    }
}
