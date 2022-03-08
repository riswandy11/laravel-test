<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(){
        $roles = DB::table('roles')->get();

        return view('role/index', [
            'roles' => $roles
        ]);
    }

    public function add(){
        return view('role/add');
    }

    public function store(Request $request){
        DB::table('roles')->insert([
            'name' => $request->name,
            'code' => $request->code
        ]);
        
        return redirect('/role');
    }

    public function show($id){
        $role = DB::table('roles')->where('role_id',$id)->first();

        return view('role/view', [
            'role' => $role
        ]);
    }

    public function update(Request $request){
        DB::table('roles')->where('role_id',$request->id)->update([
            'name' => $request->name,
            'code' => $request->code
        ]);
        
        return redirect('/role');
    }

    public function delete($id){
        DB::table('roles')->where('role_id',$id)->delete();
        
        return redirect('/role');
    }
}
