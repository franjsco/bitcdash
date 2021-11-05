<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LowHighPrice extends Component
{

    public $low24h;
    public $high24h;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($low24h, $high24h)
    {
        $this->low24h = $low24h;
        $this->high24h = $high24h;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.low-high-price');
    }
}
