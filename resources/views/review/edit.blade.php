@extends('layouts.master')
@section('content')
@include('partials.errors')

@if(Session::has('success_review_update'))
<div class="alert alert-success">
	{{ Session::get('success_review_update') }}
</div>
@endif

<form action="{{ route('review.update', ['id' => $review->id]) }}" method="post">
	
	<input type="hidden"  name="_method" value="PUT">

	{{ csrf_field() }}

	<div class="form-group">
		<label for="title" class="control-label">Title</label>
		<input type="text" name="title" class="form-control" value="{{ $review->title }}">

	</div>

	<div class="form-group">
		<label for="phone" class="control-label">Phone</label>
		<input type="integer" name="phone" class="form-control" value="{{ $review->phone}}" id=""></div>

    <div class="form-group">
		<label for="address" class="control-label">Address</label>
		<input type="text" name="address" class="form-control" value="{{ $review->address}}">
		</div>

	<button type="submit" class="btn btn-primary ">Updat Review Post</button>
</form>

@stop