<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\ArticleModel;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function newform()
    {
        return view('new');
    }
    public function newArticle(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');
        
        $article = new ArticleModel();
        $article->title = $title;
        $article->content = $content;
        
        
        $article->save();
        return redirect('/all');
    }
}
