<?php

namespace App\View\Components\blocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnitsCardList extends Component
{
    public $unit ;
    public $showmore ;
    public $show_more_style;

    public function __construct(
        $unit = array(),
        $showmore = true,
        $show_more_style = ' ty-compact-list-units ',
    )
    {
        $this->unit = $unit;
        $this->showmore = $showmore;
        $this->show_more_style = $show_more_style;

        if($this->showmore == false){
            $this->show_more_style = '';
        }

    }
    public function render(): View|Closure|string
    {
        return view('components.blocks.units-card-list');
    }
}
