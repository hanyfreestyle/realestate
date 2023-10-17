<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedProjectsCard extends Component
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
        return view('components.blog.related-projects-card');
    }
}
