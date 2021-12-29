<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    function get_index_page(Request $request){
        $pa = $request -> get('id');
        if ($pa == null){$pa=1;}
        $pa = $pa*20;
        $data = DB::table('items')->get();
//        dd($data);
        return view('pages.index',compact('data','pa'));
    }

    public function get_create_page()
    {
        return view('pages.create');
    }
    public function store_create_item(Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $image = $request->get('image');
        if ($image == ''){
            $image="default.jpg";
        }

        $price = $request->get('price');
        DB::table('items')->insert([
            'name'=>$name,
            'description'=>$description,
            'image'=>$image,
            'price'=>$price
        ]);

        return view('pages.create');
    }

    public function get_signup_page()
    {
        return view('pages.signup');
    }

    public function store_signup_user(Request $request)
    {
        dd($request);
    }
}
