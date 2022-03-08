<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();

        return view('user/index', [
            'users' => $users
        ]);
    }

    public function add(){
        return view('user/add');
    }

    public function store(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return redirect('/user');
    }

    public function show($id){
        $user = DB::table('users')->where('user_id',$id)->first();

        return view('user/view', [
            'user' => $user
        ]);
    }

    public function update(Request $request){
        DB::table('users')->where('user_id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return redirect('/user');
    }

    public function delete($id){
        DB::table('users')->where('user_id',$id)->delete();
        
        return redirect('/user');
    }
}
