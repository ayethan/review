<?php

namespace App\Http\Controllers;
use App\Review;
use Session;
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
        $reviews = Review::latest()->paginate(10);
        return view('review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title' =>'required',
           'phone' => 'required',
           'address' => 'required',
            ]);

        $input = $request->all();
        Review::create($input);
        Session::flash('success_review','Review successfully added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $review = Review::find($id);
        return view('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

         $this->validate($request, [

            'title' => 'required',
            'phone' => 'required',
            'address' => 'required',
            ]);
         $input = $request->all();
         $review->update($input);
         Session::flash('success_review_update','Review successfully updated!');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review =Review::findOrFail($id);
        $review->delete();
        Session::flash('success_review_deleted','Review successfully deleted!');
        return redirect()->route('review.index');

    }
}
