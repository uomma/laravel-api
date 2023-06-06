<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function index() {

        $posts = Post::all();

        return response()->json(['done' => true, 'check'=> $posts]);
    }
    
public function show(string $slug){
    $posts= Post::where('slug', $slug)->first();
if($posts){
    return response()->json(['done' => true, 'check'=> $posts]);

}else{
    return response()->json(['done' => false, 'check'=> $posts],404);

}

}

}


