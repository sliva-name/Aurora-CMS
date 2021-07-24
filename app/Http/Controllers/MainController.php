<?php

namespace App\Http\Controllers;

use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('index', compact('news'));
    }
}
