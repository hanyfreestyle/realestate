<?php

namespace App\View\Components\blocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsCardList extends Component
{
    public $unit ;
    public $project;
    public function __construct(
        $unit = array(),
        $project =  array(),
    )
    {
        $this->unit = $unit;
        $this->project = $project;

    }
    public function render(): View|Closure|string
    {
        return view('components.blocks.units-card-list');
    }
}
