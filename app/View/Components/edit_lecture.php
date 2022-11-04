<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form_editar_palestra extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $lecture;	

    public function __construct($lecture)
    {
        $this->lecture = $lecture;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit_lecture');
    }
}
