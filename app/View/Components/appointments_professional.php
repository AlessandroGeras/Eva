<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appointments_professional extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $currentUser;
    public $manyappointments;

    public function __construct($currentUser,$user,$manyappointments)
    {        
        $this->currentUser = $currentUser;
        $this->user = $user;
        $this->manyappointments = $manyappointments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.appointments_professional');
    }
}
