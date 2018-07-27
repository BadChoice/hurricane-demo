<?php

namespace App\Http\Controllers;

use App\Hurricane\Post;
use App\Hurricane\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index', ["resource" => new User]);
    }

    public function edit($id) {
        return view('edit', ["resource" => new User, "object" => \App\User::find($id)]);
    }

    public function posts() {
        return view('index', ["resource" => new Post]);
    }

    public function postsEdit($id) {
        return view('edit', ["resource" => new Post, "object" => \App\Post::find($id)]);
    }
}
