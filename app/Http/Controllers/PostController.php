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
}
