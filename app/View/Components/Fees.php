<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Fees extends Component
{
    public $fastestFee;
    public $halfHourFee;
    public $hourFee;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fastestFee, $halfHourFee, $hourFee)
    {
        $this->fastestFee = $fastestFee;
        $this->halfHourFee = $halfHourFee;
        $this->hourFee = $hourFee;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fees');
    }
}
