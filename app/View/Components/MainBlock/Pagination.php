<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{

    public $row;
    public function __construct(
        $row = array(),
    )
    {
        $this->row = $row;
    }

    public function render(): View|Closure|string
    {
        return view('components.main-block.pagination');
    }
}
