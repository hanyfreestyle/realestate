<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    public $project;

    public function __construct(
        $project = array(),
    )
    {
        $this->project = $project;
    }

    public function render(): View|Closure|string
    {
        return view('components.main-block.project-card');
    }
}
