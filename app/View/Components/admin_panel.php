<?php

namespace App\View\Components;

use Illuminate\View\Component;

class admin_panel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $warning;

    public function __construct($warning)
    {
        $this->warning = $warning;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin_panel');
    }
}
