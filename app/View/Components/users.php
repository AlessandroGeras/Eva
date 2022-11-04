<?php

namespace App\View\Components;

use Illuminate\View\Component;

class users extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $users;
    public $manylectures;
    public $permission;

    public function __construct($user,$users,$manylectures,$permission)
    {
        $this->users = $users;
        $this->user = $user;
        $this->manylectures = $manylectures;
        $this->permission = $permission;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users');
    }
}
