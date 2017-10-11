@extends('layouts.postsmaster')

@section('content')


<div class="col-sm-8">

  <h2>Create a Post</h2>
	<hr>
	
	@include('layouts.postserrors')
	
	<hr>
	
	<form method="post" action="/posts">
	  {{csrf_field()}}
	  <div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control" name="title" required>
	  </div>

	  <div class="form-group">
		<label for="body">Body:</label>
		<textarea class="form-control" id="body" name="body" rows="5"  required></textarea>
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	  
	</form>

</div>

@endsection