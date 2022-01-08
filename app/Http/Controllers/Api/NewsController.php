<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get news berhasil',
            'news'    => $news
        ]);
    }
}
