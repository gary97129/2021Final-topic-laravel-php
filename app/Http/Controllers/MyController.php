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
        $search_content = $request->get('search_content');
        $data = DB::table('items');
        if ($search_content) {
            $data->orwhere('name','like','%'. $search_content .'%');
            $data->orwhere('description','like','%'. $search_content .'%');
        }
        $data = $data->get();
//        dd($data);

        $add = $request -> get('cart');
        if ($add != null){
            $pur = DB::table('users')
                ->where('account', session('account'))
                ->first();
            DB::table('users')
                ->where('account', session(['account']))
                ->update([
                    'purchased' => ($pur->purchased . $add . ",")
                ]);
        }
        return view('pages.index',compact('data','pa'));
    }


    function get_cart_page(Request $request){
        $account = session('account');
        $data = DB::table('users')
            ->where('account',$account)
            ->first();
        $data = explode(",",($data -> purchased));
        $product = array();
        foreach ($data as $id){
            if($id != ""){
                $good = DB::table('items')
                    ->where('id',$id)
                    ->first();
                array_push($product,$good);
            }
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
        $not_match=false;
        return view('pages.signin',compact('not_match'));
    }

    public function signin_go(Request $request)
    {
        $input_account=$request->get('account');
        $input_password=$request->get('password');
        $DB_data=DB::table('users')->get();
        foreach ($DB_data as $row){
            if ($row->account==$input_account and $row->password==$input_password){
                $account=$row->account;
                session()->put('account',$account);
                return redirect()->route('get_index_page');
            }
        }
        $not_match=true;
        return view('pages.signin',compact('not_match'));
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('get_index_page');
    }

    public function changepwd(Request $request)
    {
        $not_match=false;
        $account=$request->get('account');
        $oldpassword=$request->get('oldpassword');
        $newpassword=$request->get('newpassword');
        $newpassword2=$request->get('newpassword2');

        if ($newpassword != $newpassword2){
            $change_done = false;
            return view('pages.changePWD',compact('change_done'));
        }
        else{
            $DB_data=DB::table('users')->get();
            foreach ($DB_data as $row){
                if ($row->account==$account and $row->password==$oldpassword){
                    DB::table('users')
                        ->where('account',$account)
                        ->update([
                            'password' => $newpassword
                        ]);
                    $change_done = true;
                    return view('pages.changePWD',compact('change_done'));
                }
            }
            $change_done = false;
            return view('pages.changePWD',compact('change_done'));
        }
    }

    public function get_changepwd_page()
    {
        return view('pages.changePWD');
    }
}
