<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sentiment extends Component
{
    public $value;
    public $valueClassification;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $valueClassification)
    {
        $this->value = $value;
        $this->valueClassification = $valueClassification;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sentiment');
    }
}
