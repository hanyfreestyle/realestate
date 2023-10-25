<?php

namespace App\View\Components\MainBlock;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPostRightSide extends Component
{

    public $post;

    public function __construct(
        $post =array(),

    )
    {
        $this->post = $post ;
    }


    public function render(): View|Closure|string
    {
        return view('components.main-block.blog-post-right-side');
    }
}
