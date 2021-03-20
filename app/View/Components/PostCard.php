<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $post, $type, $route;

    public function __construct(Post $post, String $type, $route = null)
    {
        $this->post = $post;
        $this->type = $type;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.post-card');
    }
}
