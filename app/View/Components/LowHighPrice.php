<?php

namespace App\View\Components;

use Illuminate\View\Component;

Use Config;
class LowHighPrice extends Component
{

    public $low24h;
    public $high24h;
    public $currency;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($low24h, $high24h, $currency)
    {
        $this->low24h = $low24h;
        $this->high24h = $high24h;
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
        return view('components.low-high-price');
    }
}
