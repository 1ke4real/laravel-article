<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function details($id){
        $article = ArticleModel::find($id);
        return view('details', ['article' => $article] );
    }
}
