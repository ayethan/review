<?php
Route::get('/', function () {
	$reviews = App\Review::latest()->paginate(6);
	return view('welcome', compact('reviews'));
});

Route::resource('/review', 'ReviewController');





