<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeadMuro extends Component
{
    public $user;
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userr,$posts)
    {
        $this->user=$userr;
        $this->posts=$posts;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.head-muro');
    }
}
