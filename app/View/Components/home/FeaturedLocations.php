<?php

namespace App\View\Components\home;

use App\Models\admin\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedLocations extends Component
{

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $locations = Location::query()
            ->where('is_active',true)
//            ->where('is_home',true)
            ->orderBy('projects_count','desc')
            ->limit('10')
            ->get();
        return view('components.home.featured-locations',compact('locations'));
    }
}
