<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    \App\Post::create([
        'title' => 'test title',
        'content' => 'test content',
    ]);
    //$posts=\App\Post::all();
   // dd($posts);
    //$post=\App\Post::find(8);
    //dd($post);
    //$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
//dd($posts);
    //$post=\App\Post::find(1);
   // $post->title='savedtitle';
   // $post->content='savedcontent';
  //  $post->save();
    //$post=\App\Post::find(14);
    //$post->delete();
   // \App\Post::destroy(15);
   // \App\Post::destroy(17,18,19);

    //$fourthPost=\App\Post::find(4);
    //dd($fourthPost);
    //$lastPost=\App\Post::orderBy('id','DESC')->first();
//dd($lastPost);
    $post=\App\Post::find(10);
    foreach($post->comments as $comment){
        echo$comment->content.'<br>';
    }

});
