<?php

namespace App\View\Components;

use Illuminate\View\Component;

class my_events extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $manylectures;

    public function __construct($manylectures)
    {
        $this->manylectures = $manylectures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my_events');
    }
}
