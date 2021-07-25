<?php

namespace App\Http\Controllers;

use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);

        $seo = [
            "title" =>  '',
            "description" => '',
            "keywords" => ''
        ];

        return view('index', compact('news', 'seo'));
    }
}
