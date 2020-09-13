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
    
    public function edit($id)
{
  $post=Post::findOrFail($id);
  return view ('editform',compact("post"));

}

public function update (Request $request,$id)
{
  $post=Post::findOrFail($id);
  $post->update($request->all());
  return redirect('allstd');


}
    
    

}
