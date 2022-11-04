<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appointment_panel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $appointment;
    public $months;

    public function __construct($user, $appointment, $months)
    {
        $this->user = $user;
        $this->appointment = $appointment;
        $this->months = $months;    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.appointment_panel');
    }
}
