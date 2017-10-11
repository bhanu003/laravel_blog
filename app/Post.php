<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title','body'];
	 
	public function comments(){
		
		//$post->comments()ie post belonging to comments  can be achieved as
		
		return $this->hasMany(Comment::class)->latest();;
	}
	
	public function addComment($body){
	/* 	Comment::create([
		'body'=>$body,
		'post_id'=>$this->id,
		]); */
		
		$this->comments()->create(compact('body'));
	}
}
