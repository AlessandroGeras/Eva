<?php

namespace App\View\Components;

use Illuminate\View\Component;

class lecture_admin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $lecture;
    public $manyusers;

    public function __construct($lecture,$manyusers)
    {
        $this->lecture = $lecture;
        $this->manyusers = $manyusers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lecture_admin');
    }
}
