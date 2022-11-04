<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appointments extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $manyappointment;

    public function __construct($manyappointment)
    {
        $this->manyappointment = $manyappointment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.appointments
        ');
    }
}
