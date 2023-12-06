<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class PostController extends Controller
{
    public function index(Review $review)
    {
        return view('posts.index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('posts/show')->with(['review' => $review]);
    }
}
