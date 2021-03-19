<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostCard extends Component
{
    public $title, $name, $com, $id, $createdAt;

    public function __construct($title, $name, $com, $id, $createdAt)
    {
        $this->title = $title;
        $this->name = $name;
        $this->com = $com;
        $this->id = $id;
        $this->createdAt = $createdAt;
    }

    public function render()
    {
        return view('components.post-card');
    }
}
