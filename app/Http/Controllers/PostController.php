<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Review $review)
    {
        return view('posts/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('posts/show')->with(['review' => $review]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Review $review, PostRequest $request)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
}
