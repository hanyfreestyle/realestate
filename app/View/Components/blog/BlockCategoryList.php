<?php

namespace App\View\Components\blog;

use App\Models\admin\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockCategoryList extends Component
{


    public function __construct(

    )
    {

    }


    public function render(): View|Closure|string
    {
        $categories = Category::query()
            ->where('is_active',true)
            ->withCount('posts')
            ->with('translation')
            ->orderBy('posts_count','desc')
            ->get();

        return view('components.blog.block-category-list',compact('categories'));
    }
}
