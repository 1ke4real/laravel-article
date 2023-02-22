<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function showedit($id){
        $article = ArticleModel::find($id);
        return view('edit', ['article'=>$article]);
    }
    public function update(Request $request, $id){
        $article = ArticleModel::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->update();
        return redirect('/all');
    }
    public function destroy( $id){
        $article = ArticleModel::find($id);
        $article->destroy($id);
        return redirect('/all');
    }
}
