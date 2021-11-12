<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MarketCapChangePercentage extends Component
{
    public $percentage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($percentage)
    {
        $this->percentage = $percentage;
    }
    

    public function isPositive($value) {
        return $value > 0 ?? false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.market-cap-change-percentage');
    }
}
