@extends('layouts.master')
@section('content')
<h1>
   <a href="{{ route('review.create') }}" class="btn btn-primary btn-lg ">Create Blog</a>
</h1>
<hr>

@if(Session::has('review_deleted'))
<div class="alert alert-success">
    {{ Session::get('review_deleted') }}
</div>
@endif


<table class="table table-dark">
<thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
</thead>
<tbody>
    @foreach($reviews as $review)
    <tr>
        <td>{{ $review->title }}</td>
        <td>{{ $review->phone }}</td>
        <td>{{ $review->address }}</td>
        <td>
            <a href="{{ route('review.edit', ['id' =>$review->id]) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        </td>
        <td>
            <form action="{{ route('review.destroy',['id' =>$review->id]) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <button type="submit" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-trash"></span> Trash 
        </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody></table>
@stop
