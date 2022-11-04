<?php

namespace App\View\Components;

use Illuminate\View\Component;

class user extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $manylectures;

    public function __construct($user,$manylectures)
    {      
        $this->user = $user;
        $this->manylectures = $manylectures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user');
    }
}
