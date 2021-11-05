<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Volume extends Component
{
    public $volume;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.volume');
    }
}
