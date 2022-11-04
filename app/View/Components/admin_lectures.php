<?php

namespace App\View\Components;

use Illuminate\View\Component;

class admin_lectures extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $lectures;

    public function __construct($lectures)
    {
        $this->lectures = $lectures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin_lectures');
    }
}
