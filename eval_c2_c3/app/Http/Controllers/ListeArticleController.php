<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ListeArticleController extends Controller
{
    public function index(){

        $articles = DB::table('articles')->get();
        return view('listeArticle', ['articles'=>$articles]);
    }
}
