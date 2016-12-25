<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class ArticleController extends Controller
{
    protected $data;

    public function index()
    {
        $articles = Article::orderBy('publishedon', 'desc')->paginate(2);
        if ($articles == null) {
            return back();
        } else {
            $this->data['articles'] = $articles;
            return view('pages.news.list', $this->data);
        }
    }

    public function show($id)
    {
        $article = Article::find($id);
        if ($article == null) {
            return back();
        } else {
            $this->data['article'] = $article;
            return view('pages.news.single', $this->data);
        }
    }
}