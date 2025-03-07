<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    

    public function Adress(Request $request){




        if(isset()){

            

        }else {
            
            $adress = Address::create([
                'City'=> $request['City'],
                'Adress'=> $request['Adress'],
                'zip_code'=> $request['zip_code'],
                'Country'=> $request['Country']
            ]);


        }



    }

}
