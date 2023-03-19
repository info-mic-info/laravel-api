<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('type','tags')->paginate(9);
        return response()->json([
            'success'=> true,
            'results'  => $post,
        ]);
    }
}
