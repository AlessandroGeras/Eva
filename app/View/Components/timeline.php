<?php

namespace App\View\Components;

use Illuminate\View\Component;

class timeline extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $palestras;
    public $months;
    public $search;

    public function __construct($palestras,$months,$search)
    {
        $this->palestras = $palestras;
        $this->months = $months;
        $this->search = $search;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.timeline');
    }
}
