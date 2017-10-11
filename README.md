# laravel_blog

<?php
/**
@One time configuration
 d:
cd D:/xampp/htdocs/bhanu/laravel
<br>
composer create-project laravel/laravel_foldername
<br>
php artisan key:generate 
<br>
**/

<br>
d: 
<br>
cd D:/xampp/htdocs/bhanu/laravel/laravel_learning
<br>
php artisan --version
<br>
php artisan serve //start service
<br>
localhost:8000 //local urldecode

/** 
<br>
Laravel Links
=============================
<br>
https://github.com/laravel/laravel
<br>
https://github.com/laravel/laravel.git
<br>
https://laravel-news.com/laravel-5-4-key-too-long-error
<br>
https://laracasts.com/series/laravel-from-scratch-2017/episodes/3?autoplay=true
<br>
https://devdojo.com/series/laravel-5-3-basics/episode/relationships
<br>
https://github.com/KodeBlog/Laradmin
<br>
https://scotch.io/tutorials/a-guide-to-using-eloquent-orm-in-laravel
<br>
https://github.com/groloop
<br>
https://tutorials.kode-blog.com/laravel-5-eloquent-relationships
<br>
https://github.com/bovisp/laravel-from-scratch
<br>
https://laravel-news.com/your-first-laravel-application 
<br>
https://github.com/jacurtis/laravel-blog-tutorial
<br>
**/
<br>

php artisan app:name <name-of-your-application> //Naming the Application
<br>
//php artisan app:name hello 
<br>
composer remove packagename //remove packages
<br>
php artisan down //To start the maintenance mode
<br>
php artisan up //To stop the maintenance mode
<br>
routes--> web.php //has route function ie url address
<br>
/* Route::get('/', function () {
    return view('welcome');
}); 
<br>
--> '/' can be replaced with any url like /about or /new or name
<br>
'/' --> is optional in new address
<br>
*/
<br>
resources --> views ,has views templates
<br>
resources --> views -->welcome.blade.php , has welcome page css and html
<br>
<?php foreach($tasks as $task):?> can be replaced with @foreach($tasks as $task)
<br>
<?php endforeach; ?> can be replaced with @endforeach
<br>
<?php if($a == 5):?> can be replaced with @if($a == 5)
<br>
<?php endif; ?> can be replaced with @endif
<br>
<?php while($i <= 10): ?> can be replaced with @while($i <= 10)
<br>
<?php endwhile; ?> can be replaced with @endwhile
<br>
php artisan make:migration create_tasks_table  //will not creates schema automatically
<br>
php artisan make:migration create_tasks_table --create=tasks //will creates schema automatically
<br>

composer dump-autoload //will reload all files run when filed deleted or added
<br>
php artisan migrate // to migrate tables
<br>
php artisan migrate:rollback //to roll back
<br>
php artisan migrate:refresh
<br>
//https://laravel-news.com/laravel-5-4-key-too-long-error

/**
<br>
 If you are using the PHP's default web server (e.g. php artisan serve) you need to restart your server after changing your .env file values. 
 
 **/

php artisan make:model Modelname 
php artisan make:model Products -mc //creates model and controller at once
php artisan tinker
php artisan routes

php artisan make:controller ControllerName -r //resource full controller
php artisan make:controller ProductsController
php artisan make:auth //creates authentication fields
php artisan migrate --verbose

php artisan config:cache
composer update

php artisan make:model Articles -mc
php artisan make:model Post -m

php artisan make:controller RegistrationController -r
php artisan make:controller SessionController -r
php artisan make:controller PostsController -r

 App\Comment can also be written as Comment::class
 <br>
/*
<br>
Tinker commands:
<br>
App\User::all();
<br>
App\User::count();
<br>
$user = App\User::find(1);
<br>
$user->delete();
<br>
$query = \DB::table('users')
<br>
$query = $query->where('name', 'Me')
<br>
$query->get(); 
<br>
*/