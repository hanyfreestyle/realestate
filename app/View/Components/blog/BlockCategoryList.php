<?php

namespace App\View\Components\blog;

use App\Models\admin\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockCategoryList extends Component
{

    public $categories ;
    public function __construct(
        $categories = array(),
    )
    {
//        $categories = Category::query()
//            ->where('is_active',true)
//            ->withCount('posts')
//            ->with('translation')
//            ->orderBy('posts_count','desc')
//            ->get();
//
//        dd($categories);
        $this->categories = $categories ;
    }


    public function render(): View|Closure|string
    {


        return view('components.blog.block-category-list');
    }
}
