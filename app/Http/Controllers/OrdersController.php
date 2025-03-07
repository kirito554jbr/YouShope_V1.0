<?php

namespace App\Http\Controllers;

use App\Models\Ordered_items;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Climate\Order;

class OrdersController extends Controller
{

    public function index()
    {
        $orders = Orders::get();

        $userName = User::find(auth()->id());

        // dd($userName);

        return view('Client.myOrders', compact('orders'), compact('userName'));
    }


    public function Adminindex()
    {
        $orders = Orders::all();
        // dd($orders);
        // array_push($product, Product::find($value['product_id']));

        $userName = User::find(auth()->id());
        // $users = [];
        foreach($orders as $order){
            $user = User::find($order['user_id']);
        };
        // dd($users);



        // $users =  User::find();



        // dd($userName);

        return view('Admin.Adminorders', compact('orders'), compact('userName'));
    }




    public function create(Request $request)
    {

        $test = session()->get('cart');
        // $product = Product::find(array_keys($test));

        // dd($product[0]['price']);

        $Prix_Total = 0;

        foreach ($test as $key => $value) {

            // echo $value['price'] . '<br>';
            // echo '<br>' . $value['quantity'] . '<br>';

            $Prix_Total += $value['price'] * $value['quantity'];
        }



        $orders =  Orders::create([
            'user_id' => auth()->id(),
            'status' => "Pending",
            'Prix_Total' => $Prix_Total,
            'Adress' => "adress"
        ]);




        foreach ($test as $key => $details) {
            Ordered_items::create([
                'order_id' => $orders->id,
                'product_id' => $details['id'],
                'quantity' => $details['quantity']
            ]);
        }





        return redirect('/ProductsCalient')->with('success', 'Item created successfully');
    }


    public function orderDetails(Request $request)
    {
        // dd($request['id']);
        $orders = Orders::find($request['id']);

        $ordered_items = Ordered_items::where('order_id', $request['id'])->get();
        // dd($ordered_items);

        $product = [];
        // $quantity = [];
        foreach ($ordered_items as $key => $value) {

            array_push($product, Product::find($value['product_id']));
        }




        return view('Client.orderDetails', compact('orders'), compact('product'));
    }


    public function updateStatus(Request $request){

        $order = Orders::find($request['id']);
        $order->update($request->all());

        return redirect('/AdminOrders');


    }
}
