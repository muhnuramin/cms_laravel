<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\article;

class ArticleController extends Controller
{
    public function article()
    {
        return view('article');
    }

    public function index()
    {
       $articles=Article::all();
       return view ('manage',['article'=>$articles]); 
    }
    
    public function add()
    {
        return view ('addarticle');
    }
    public function create(Request $request)
    {
        Article::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'imageurl'=>$request->imageurl,
            'content'=>$request->content
        ]);
        return redirect('/manage');
    }
    public function edit($id)
    {
        $articles=Article::find($id);
        return view('editarticle',['article'=>$articles]);
    }
    public function update($id,Request $request)
    {
        $article=Article::find($id);
        $article->title=$request->title;
        $article->author=$request->author;
        $article->imageurl=$request->imageurl;
        $article->content=$request->content;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('manage');
    }
}

