<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsCard extends Component
{

    public $unit;
    public function __construct(
        $unit = array(),
    )
    {
       $this->unit = $unit ;
    }


    public function render(): View|Closure|string
    {
        return view('components.main-block.units-card');
    }
}
