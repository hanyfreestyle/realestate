<?php

namespace App\View\Components\DefBlocks;

use App\Models\admin\config\Amenity;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Amenities extends Component
{
    public $row ;
    public $title;
    public $senddata;


    public function __construct(
        $row = array(),
        $title = null,
        $senddata = null,
    )
    {
        $this->row = $row;
        $this->title = $title;
        $this->senddata = $senddata;

    }
    public function render(): View|Closure|string
    {
        $amenities = Amenity::query()->with('translation')->get();
        return view('components.def-blocks.amenities',compact('amenities'));
    }
}
