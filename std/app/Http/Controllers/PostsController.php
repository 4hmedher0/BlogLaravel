<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
 public function form ()
 {
    return view('form');

 }  


 public function addform (Request $request)
 { 
  	$post=Post::create($request->all());
  	return redirect ('allstd');


  # dd(request());
 }  

public function showform ()
{
  $post=Post::all();
  return view ('allstd',compact("post"));

}

}
