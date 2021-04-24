<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function addData(Request $req) {
        $post= new Post;
        $post->title=$req->title;
        $post->description=$req->description;
        $post->save();
    }

    function show(){
        $data= Post::all();
        return view('list', ['posts'=>$data]);
    
    }

   public function delete($id){
       $ob=Post::find($id);
       $ob->delete();
       return redirect('list');
   }

   function edit($id){
       $data=Post::find($id);
       return view('edit', ['data'=>$data]);

   }

   function update(Request $req){
       $data=Post::find($req->id);
       $data->Title=$req->Title;
       $data->Description=$req->Description;
       $data->save();
       return redirect('list');
       

   }
   
    
}
