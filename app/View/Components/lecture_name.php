<?php

namespace App\View\Components;

use Illuminate\View\Component;

class lecture_name extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $lecture;
    public $months;

    public function __construct($lecture,$months)
    {
        $this->lecture = $lecture;
        $this->months = $months;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lecture_name');
    }
}
