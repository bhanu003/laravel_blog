
<div class=" blog-post">

<h3 class="blog-post-title">
   <a href="/posts/{{$post->id}}">
   
  {{$post->title}}
  
  </a>
  </h3>
  
	<p class="blog-post-meta">
	{{$post->created_at->diffForHumans()}}
	</p>
	
	<p class="blog-post-body">
	{{$post->body}}
	</p>
	
</div>