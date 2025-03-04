<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::all();

        // dd(compact('product'));


        foreach ($product as $products) {
            $categorie = Categorie::find($request['categorie_id']);
        };
        // dd($user);
        return view('Admin.adminDashboard', compact('product'));
    }


    public function create(Request $request)
    {

        Product::create([
            'product_name' => $request['product_name'],
            'image' => $request['image'],
            'quantity' => $request['quantity'],
            'description' => $request['description'],
            'price' => $request['price'],
            'categorie_id' => $request['categorie_id']
        ]);



        return redirect('/Products')->with('success', 'Item created successfully');
    }


    public function delete(Request $request)
    {
        $id = $request['id'];


        // dd($id);
        Product::find($id)->delete();
        return redirect('/Products')->with('success', 'Item deleted successfully');
    }

    public function update(Request $request)
    {

        // dd($request['categorie_id']);
        // dd($request);

        $product = Product::find($request['id']);
        $product->update($request->all());

        // dd($product);



        // $item->save();
        return redirect('/Products')->with('success', 'Item updated successfully');
    }



    public function showOne(Request $request)
    {
        $product = Product::find($request['id']);
        // dd($product);


        $categorie = Categorie::all();
        // dd(compact('product'));

        // dd(compact('categorie'));



        // dd($user);
        return view('Admin.updateProduct', compact('product'), compact('categorie'));
    }


    public function showCategory()
    {

        $categorie = Categorie::all();

        return view('Admin.createProduct', compact('categorie'));
    }








    public function indexClient(Request $request)
    {
        $product = Product::all();

        // dd(compact('product'));


        foreach ($product as $products) {
            $categorie = Categorie::find($request['categorie_id']);
        };
        // dd($user);
        return view('Client.clinetDashboard', compact('product'));
    }


    // public function addToCart(Request $request)
    // {
    //     // $productId = $request->input('product_id');
    //     $product = Product::find($request['id']);

    //     if (!$product) {
    //         return redirect()->route('Client.clinetDashboard')->with('error', 'Product not found!');
    //     }

    //     // Add product to cart
    //     $cart = session()->get('cart', []);
    //     $cart[$request['id']] = [
    //         'name' => $product->name,
    //         'price' => $product->price,
    //     ];
    //     session()->put('cart', $cart);

    //     return redirect()->route('products.index')->with('success', 'Product added to cart successfully!');
    // }


    public function testCart()

    {

        $products = Product::all();

        return view('Client.products', compact('products'));

    }


    public function addToCart($id)

    {
        // dd($id);

        $product = Product::findOrFail($id);

          

        $cart = session()->get('cart', []);

        

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "id" => $id,

                "name" => $product->name,

                "quantity" => 1,

                "price" => $product->price,

                "image" => $product->image

            ];

        }

          

        session()->put('cart', $cart);



        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }


    public function updateCart(Request $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }


    public function cart()

    {
        // dd(auth()->id());
        // dd(session()->get('cart'));


        return view('Client.cart');

    }




    public function remove(Request $request)

    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }

    }
}
