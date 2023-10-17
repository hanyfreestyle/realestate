<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OtherProjects extends Component
{
    public $projects;
    public $titel;

    public function __construct(
        $projects = array(),
        $titel = null,

    )
    {
        $this->projects = $projects;
        $this->titel = $titel;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog.other-projects');
    }
}
