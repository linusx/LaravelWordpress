<?php // File: app/Post.php

namespace App\MyApp;

use Corcel\Post as Corcel;

class Post extends Corcel {
	protected $connection = 'wordpress';

	public function categories() {
		return $this->taxonomies()->where('taxonomy', '=', 'category')->get();
	}

	public function tags() {
		return $this->taxonomies()->where('taxonomy', '=', 'post_tag')->get();
	}

}