<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create(Request $request)
    {

        Categorie::create([
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        // return redirect('/Products')->with('success', 'Item created successfully');
    }


    public function showOne(Request $request)
    {
        $categorie = Categorie::all();


        // dd($user);
        // return view('Admin.adminDashboard', compact('product'));
        return view('Admin.updateProduct', compact('categorie'));
        // return compact('categorie');
    }
}
