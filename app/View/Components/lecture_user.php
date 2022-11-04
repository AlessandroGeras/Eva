<?php

namespace App\View\Components;

use Illuminate\View\Component;

class lecture_user extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $lecture;
    public $manylectures;

    public function __construct($lecture,$manylectures)
    {
        $this->lecture = $lecture;
        $this->manylectures = $manylectures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lecture_user');
    }
}
