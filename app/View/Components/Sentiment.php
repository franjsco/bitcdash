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

    public function getColorBasedOnSentiment()
    {
        $value = $this->value;

        return match(true) {
            $value <= 19 => 'bg-red-500',
            $value >= 20 && $value <= 39 => 'bg-yellow-500',
            $value >= 40 && $value <= 59 => 'bg-yellow-400',
            $value >= 60 && $value <= 79  => 'bg-green-500',
            $value >= 80 => 'bg-green-600'
        };
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
