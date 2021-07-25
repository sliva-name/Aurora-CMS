<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function view($slug)
    {
        $news = News::where('slug', $slug)->first();
        $seo = [
            "title" => $news->seo_title ?: $news->title,
            "description" => $news->seo_description,
            "keywords" => $news->seo_keywords
        ];

        return view('news.view', compact('news', 'seo'));
    }
}
