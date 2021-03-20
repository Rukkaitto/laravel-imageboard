<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostForm extends Component
{
    public $route, $type;

    public function __construct($route, $type)
    {
        $this->route = $route;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.post-form');
    }
}
