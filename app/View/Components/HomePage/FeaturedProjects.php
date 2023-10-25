<?php

namespace App\View\Components\HomePage;

use App\Models\admin\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedProjects extends Component
{

    public $title;
    public $locations;


    public function __construct(
        $title = null ,
    )
    {
        if ($this->title == null){
            $this->title = __('web/home.featured-projects') ;
        }else{
            $this->title  = $title;
        }

        $locations = Location::query()
            ->where('is_active',true)
            ->orderBy('projects_count','desc')
            ->limit('4')
            ->get();

        $this->locations = $locations ;
    }


    public function render(): View|Closure|string
    {
        return view('components.home-page.featured-projects');
    }
}
