<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function manageUser()
    {
        return view('manageUser');
    }

    public function index()
    {
        $users=User::all();
        return view ('manageUser',['User'=>$users]); 
    }

    public function add()
    {
        return view ('adduser');
    }

    public function create(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'roles'=>$request->roles,
        ]);
        return redirect('/manage/user');
    }
    public function edit($id)
    {
        $users=User::find($id);
        return view('edituser',['user'=>$users]);
    }
    public function update($id,Request $request)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->roles=$request->roles;
        $user->save();
        return redirect('/manage/user');
    }
    public function delete($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect('/manage/user');
    }
}
