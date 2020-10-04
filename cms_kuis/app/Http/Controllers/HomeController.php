<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\article;

class HomeController extends Controller
{
    
    public function home()
    {
        // $articles=DB::table('articles')->get();
        // $articles=article::all();
        // return view('home',['articles'=>$articles]);
        $articles=Cache::remember('articles',15,function(){
            return article::paginate(3);
        });
        return view('home',['articles'=>$articles]);
    }
    // public function homeId(article $articles)
    // {
    //     $articles=article::findOrFail($article=>id);
    //     return view()
    // }
}
