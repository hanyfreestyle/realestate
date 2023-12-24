<?php

namespace App\View\Components\blocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsCardList extends Component
{
    public $unit ;
    public $showmore ;
    public $showmorestyle;

    public function __construct(
        $unit = array(),
        $showmore = true,
        $showmorestyle = ' ty-compact-list-units ',
    )
    {
        $this->unit = $unit;
        $this->showmore = $showmore;
        $this->show_more_style = $showmorestyle;

        if($this->showmore == false){
            $this->showmorestyle = '';
        }

    }
    public function render(): View|Closure|string
    {
        return view('components.blocks.units-card-list');
    }
}
