<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsSlider extends Component
{
    public $photos;
    public $unit;
    public $type;
    public function __construct(
        $photos =array(),
        $unit =array(),
        $type ='',
    )
    {
        $this->photos = $photos;
        $this->unit = $unit;
        $this->type = $type;
    }


    public function render(): View|Closure|string
    {
        return view('components.main-block.units-slider');
    }
}
