<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Tpetry\QueryExpressions\Function\Conditional\Greatest;
use Tpetry\QueryExpressions\Language\Alias;

class PostsController extends Controller
{
    public function show() 
    {
        $posts = Post::select([
            'title', 'author_id', 'posted_at', 'created_at', 'updated_at',
            new Alias(new Greatest(['posted_at', 'created_at', 'updated_at']), 'last_modification')
        ])->where('author_id', '<=', 10)->get();
        foreach ($posts as $post) {
            echo '文章標題：' . $post->title . ' - 作者：' . $post->author->name . PHP_EOL;
        }        
    }
}
