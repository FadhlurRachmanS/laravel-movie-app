<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }
    
    public function create()
    {
        $reviews = Review::all();
        return view('reviews.create', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie' => 'required',
            'poster' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

    public function edit(Review $review)
    {
        $reviews = Review::all();
        return view('reviews.edit', compact('review', 'reviews'));
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'movie' => 'required',
            'poster' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        $review->update($validatedData);

        return redirect('/reviews')->with('success', 'review updated successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    }
}