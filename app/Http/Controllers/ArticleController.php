<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'First Article',
                'content' => 'This is the content of the first article.'
            ],
            [
                'id' => 2,
                'title' => 'Second Article',
                'content' => 'This is the content of the second article.'
            ],
            [
                'id' => 3,
                'title' => 'Third Article',
                'content' => 'This is the content of the third article.'
            ],
            [
                'id' => 4,
                'title' => 'Fourth Article',
                'content' => 'This is the content of the fourth article.'
            ],
            [
                'id' => 5,
                'title' => 'Fifth Article',
                'content' => 'This is the content of the fifth article.'
            ]
        ];

        return view('articles.index', compact('articles'));
    }
}
