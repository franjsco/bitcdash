<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PricePercentage extends Component
{

    public $priceChangePercentage24h;
    public $priceChangePercentage7d;
    public $priceChangePercentage14d;
    public $priceChangePercentage30d;
    public $priceChangePercentage60d;
    public $priceChangePercentage1y;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $priceChangePercentage24h,
        $priceChangePercentage7d,
        $priceChangePercentage14d,
        $priceChangePercentage30d,
        $priceChangePercentage60d,
        $priceChangePercentage1y
    ) {
        $this->priceChangePercentage24h = $priceChangePercentage24h;
        $this->priceChangePercentage7d = $priceChangePercentage7d;

        $this->priceChangePercentage14d = $priceChangePercentage14d;
        $this->priceChangePercentage30d = $priceChangePercentage30d;
        $this->priceChangePercentage60d = $priceChangePercentage60d;
        $this->priceChangePercentage1y = $priceChangePercentage1y;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.price-percentage');
    }
}
