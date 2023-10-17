<?php

namespace App\View\Components\blocks;

use App\Models\admin\config\Amenity;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Amenities extends Component
{
    public $row ;
    public $title;
    public function __construct(
        $row = array(),
        $title = null,
    )
    {
        $this->row = $row;
        $this->title = $title;

    }

    public function render(): View|Closure|string
    {
        $amenities = Amenity::all();
        return view('components.blocks.amenities',compact('amenities'));
    }
}
