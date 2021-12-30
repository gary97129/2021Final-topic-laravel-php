<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

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

    function get_cart_page(Request $request){

        $data = DB::table('users')
            ->where('id',1)
            ->first();
        $data = explode(",",($data -> purchased));
        $product = array();
        foreach ($data as $id){
            $good = DB::table('items')
                ->where('id',$id)
                ->first();
            array_push($product,$good);
        }

        return view('pages.cart',compact('product'));
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
        $not_match=false;
        $same_account=false;
        $same_email=false;
        $signup_done=false;
        return view('pages.signup',compact('not_match','same_email','same_account','signup_done'));
    }
    public function store_signup_user(Request $request)
    {
        $not_match=false;
        $same_account=false;
        $same_email=false;
        $signup_done=false;
        $DB_data=DB::table('users')->get();
        $account=$request->get('account');
        $password=$request->get('password');
        $password2=$request->get('password2');
        $name=$request->get('name');
        $email=$request->get('email');

        if ($password != $password2){
            $not_match=true;
            return view('pages.signup',compact('not_match','same_email','same_account','signup_done'));
        }
        else{
            foreach ($DB_data as $row){
                if ($row->account==$account){
                    $same_account=true;
                }
                if ($row->email==$email){
                    $same_email=true;
                }
                if ($same_account==true or $same_email==true){
                    return view('pages.signup',compact('not_match','same_email','same_account','signup_done'));
                }
            }

            DB::table('users')->insert([
                'account'=>$account,
                'password'=>$password,
                'name'=>$name,
                'email'=>$email
            ]);
            $signup_done=true;
            return view('pages.signup',compact('not_match','same_email','same_account','signup_done','account','email'));
        }
    }


    public function get_signin_page()
    {
        return view('pages.signin');
    }

    public function signin_go(Request $request)
    {

    }
}
