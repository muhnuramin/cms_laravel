<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\Gate;
use PDF;



class ArticleController extends Controller
{
    public function __construct()
    {
        //$this-middleware(auth);
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles'))return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        //Login dengan akun user, ketika klik menu Kelola maka akan muncul peringatan 'Anda tidak memiliki cukup hak akses'.
    }
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
        if($request->file('imageurl')){
            $image_name=$request->file('imageurl')->store('images','public');
        }
        Article::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'imageurl'=>$image_name,
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
        // $article->imageurl=$request->imageurl;
        $article->content=$request->content;
        if($article->imageurl && file_exists(storage_path('app/public'.$article->imageurl)))
        {
            \Storage::delete('public/'.$article->imageurl);
        }
        $image_name=$request->file('imageurl')->store('images','public');
        $article->imageurl=$image_name;
        $article->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('manage');
    }

    public function show(Article $article)
    {
        return view('article',['article'=>$article]);
        // passing variabel ['article'=>$article]
    }

    public function cetak()
    {
        $article=Article::all();
        $pdf=PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
    }

} 