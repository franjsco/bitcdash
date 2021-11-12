<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Config;

class MarketCap extends Component
{   
    public $marketCap;
    public $currency;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($marketCap, $currency)
    {
        $this->marketCap = $marketCap;
        $this->currency = $currency;
    }


    public function getSymbol()
    {
        $currency1 = $this->currency;
       
        $symbol = array_merge(...array_filter(
            Config::get('currencies'), 
            function ($currency) use ($currency1) {
                return $currency["code"] == $currency1;
            }))["symbol"];

        return $symbol;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.market-cap');
    }
}
