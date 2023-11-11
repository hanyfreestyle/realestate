<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsSliderFolder extends Component
{
    public $photos;
    public $unit;
    public function __construct(
        $photos =array(),
        $unit =array(),
    )
    {
        $this->photos = $photos;
        $this->unit = $unit;
    }

    public function render(): View|Closure|string
    {
        return view('components.main-block.units-slider-folder');
    }
}
