<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
	
	public function post(){
		
		//$comments->post() ie comments belonging to post can be achieved as 
		
		return $this->belongsTo(Post::class);
	}
}
