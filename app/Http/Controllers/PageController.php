<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\ArticleItem;

class PageController extends Controller
{
    public function fetchArticles()
    {
        $lists = Article::select(Article::MINIMAL_TABLE)->get();

        return response()->json([
            'lists' => $lists,
        ]);
    }

    public function fetchArticle(Request $request)
    {
        $list = Article::select(Article::TABLE_COLUMNS)
            ->where('id', $request->id)
            ->with([
                'article_items' => function($query) {
                    $query->select(ArticleItem::TABLE_COLUMNS);
                },
            ])->first();

        return response()->json([
            'list' => $list,
        ]);
    }
}
