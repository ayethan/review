  @extends('layouts.master')
@section('content')

<h1><a href="{{ route('review.create') }}" class="btn btn-primary btn-lg">Create Review</h1></a>
<hr>

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
    <tr>
      @foreach($reviews as $review)
      <<td>{{ $review->title }}</td>
      <td>{{ $review->phone }}</td>
      <td>{{ $review->address }}</td>
      
      <td><a href="{{ route('review.edit', ['id' =>$review->id]) }}" class="btn btn-primary">Edit</a></td>

      <td><a href="{{ route('review.destroy', ['id' =>$review->id]) }}" class="btn btn-danger">Delete</a></td>
    
    </tr>
    @endforeach
  </tbody>
</table>
      


@stop