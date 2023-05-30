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
}
