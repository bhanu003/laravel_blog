@extends('layouts.postsmaster')

@section('content')

<div class="col-sm-8">

  <h2>User Login:</h2>
	<hr>
	<form >
		{{ csrf_field() }}

		
		
	</form>
	@include('layouts.postserrors')
	
</div>	
@endsection