<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Category;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;


class HomeController extends Controller
{
  public function __construct(){
    Carbon::setlocale('es');
  }
    public function index()
    {
     $articles = Article::orderBy('id', 'DESC')->paginate(4);
     $articles->each(function($articles){
        $articles->category;
        $articles->images;
     });

     return view ('front.index')->with('articles', $articles);
    }
}
