<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
	protected $fillable = ['body'];
	
	public function post(){
		
		//$comments->post() ie comments belonging to post can be achieved as 
		
		return $this->belongsTo(Post::class);
	}
	
	public function user(){
		
		//$comments->user->name
		
		return $this->belongsTo(User::class);
	}
}
