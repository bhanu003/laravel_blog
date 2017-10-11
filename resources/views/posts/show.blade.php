@extends('layouts.postsmaster')

@section('content')
<div class=" col-sm-8 blog-main">

	<h1 class="blog-post-title">
		{{$posted_id->title}}
	</h1>
	<p class="blog-post-meta">
		{{$posted_id->created_at->diffForHumans()}}
	</p>

	<p class="blog-post-body">
		{{$posted_id->body}}
	</p>
	
<!-- Display Comments -->
	
	<div class="comments">
	<ul class="list-group">
	@foreach($posted_id->comments as $comment)
	<li class="list-group-item">
	
		<strong>
		{{$comment->created_at->diffForHumans()}}: &nbsp;
		</strong>
		
		{{$comment->body}}
		
	</li>
	
	@endforeach
	</ul>
	
	</div>



<!-- Add a Comment -->
	<hr>
	<div class="card">
		<div class="card-block">
			<form method="post" action="/posts/{{$posted_id->id}}/comments">
				{{ csrf_field() }}
			  <div class="form-group">
				<textarea name="body" id="body" placeholder="Your comment here." class="form-control">
				</textarea>
			  </div>
			  
			   <div class="form-group">
				<button type="submit" class="btn btn-primary" >Add Comment</button>
			  </div> 
			</form>
			@include('layouts.postserrors')
		</div>
	</div>
</div>
@endsection