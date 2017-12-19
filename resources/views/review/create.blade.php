@extends('layouts.master')
@section('content')

@include('partials.errors')

@if(Session::has('success_review'))
<div class="alert alert-success">
{{Session::get('success_review') }}
</div>
@endif
<form action="{{ route( 'review.store') }}" method="post">

{{ csrf_field() }}

<div class="form-group">
<label for="title" class="control-label">Title</label>
<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
<label for="phone" class="control-label">Phone</label>
<input type="integer" name="phone" class="form-control">
</div>

<div class="form-group">
<label for="address" class="control-label">Address</label>
<input type="text" name="address" class="form-control" id="">
</div>

<button type="submit" class="btn btn-primary">Create New One</button>
</form>


@stop