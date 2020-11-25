<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use PDF;

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
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'roles'=>$request->roles,
            'image' => $image_name,
        ]);
        return redirect('/manage/user')->with('status','User Berhasil Ditambah');
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
        if($user->image && file_exists(storage_path('app/public'.$user->image)))
        {
            \Storage::delete('public/'.$user->image);
        }
        $image_name=$request->file('image')->store('images','public');
        $user->image=$image_name;
        $user->save();
        return redirect('/manage/user')->with('status','User Berhasil Diedit');
    }
    public function delete($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect('/manage/user')->with('status','User Berhasil Dihapus');
    }
    public function cetak()
    {
        $user=user::all();
        $pdf=PDF::loadview('user_pdf',['user'=>$user]);
        return $pdf->stream();
    }
}
