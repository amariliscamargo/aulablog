<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class indexController extends Controller
{
    function index(){
    	$posts = Post::all();
    	return view('index.index',compact('posts'));
    }
}
