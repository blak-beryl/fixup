<?php

namespace App\Http\Controllers;

use App\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
         return view('review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $review = new Review();
         return view('review.create', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = Review::create($this->requestValidation());
         $this->storeImage($review);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        return view('review.show', 'review');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        return view('review.edit', 'review');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, review $review)
    {
        $review->update($this->requestValidation());

         $this->storeImage($review);
    
           return view('review.show', compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        $review->delete();
    }

    protected function requestValidation()
    {
        return tap(request()->validate([
            'review' => 'required | max:255',
            'user_id' => 'required'
        ]),
         function(){

     if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image|max:10000'
                ]);
            }
        });
    }

     protected function storeImage($review)
    {
        if(request()->has('image')){
            $review->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
    }
}





