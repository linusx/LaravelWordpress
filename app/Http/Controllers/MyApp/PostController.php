<?php

namespace App\Http\Controllers\MyApp;

use App\MyApp\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class PostController extends Controller {

	public function showPosts() {
		$posts = Post::type('post')->status('publish')->get();
		return Response::view('posts.list', ['posts' => $posts]);
	}

	public function showPost($slug) {
		$post = Post::where('post_name', '=', $slug)->first();
		return Response::view('posts.post', ['post' => $post]);
	}

}