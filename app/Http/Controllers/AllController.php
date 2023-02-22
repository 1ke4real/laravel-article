<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function allArticle(){
        $data = ArticleModel::all();
        return view('welcome', ['data' => $data]);
    }
}
