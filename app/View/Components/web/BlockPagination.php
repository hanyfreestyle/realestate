<?php

namespace App\View\Components\web;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockPagination extends Component
{

    public $rows;
    public function __construct(
        $rows =array(),
    )
    {
        $this->rows = $rows ;
    }


    public function render(): View|Closure|string
    {
        return view('components.web.block-pagination');
    }
}
