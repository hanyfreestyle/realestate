<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedProjectsCard extends Component
{
    public $project;
    public $cardstyle ;

    public function __construct(
        $project = array(),
        $cardstyle = "",

    )
    {
        $this->project = $project;
        $this->cardstyle = $cardstyle;
    }

    public function render(): View|Closure|string
    {

        return view('components.blog.related-projects-card');
    }
}
