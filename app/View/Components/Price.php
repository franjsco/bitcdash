<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Price extends Component
{
    /**
     *  price
     * 
     * @var float
     */
    public $price;

    /**
     * Create a new component instance.
     *
     * @param float $price
     * @return void
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.price');
    }
}
