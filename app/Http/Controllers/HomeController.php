<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function home()
    {
        // $articles=DB::table('articles')->get();
        $articles=\App\article::all();
        return view('home',['articles'=>$articles]);
    }
    
    
}
