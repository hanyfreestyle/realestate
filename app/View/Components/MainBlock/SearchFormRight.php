<?php

namespace App\View\Components\MainBlock;

use App\Models\admin\Developer;
use App\Models\admin\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchFormRight extends Component
{

    public $locations ;
    public $ProjectType_Arr ;
    public $Property_TypeArr ;
    public $DeveloperArr ;
    public $ListingView_Arr ;

    public function __construct()
    {

        $ProjectType_Arr = [
            "1"=> ['id'=>'residential','name'=> 'Residential' ],
            "2"=> ['id'=>'vacation','name'=> 'Vacation' ],
            "3"=> ['id'=>'commercial','name'=> 'Commercial' ],
            "4"=> ['id'=>'medical','name'=> 'Medical' ],
        ];

        $this->ProjectType_Arr = $ProjectType_Arr ;

        $Property_TypeArr = [
            "1"=> ['id'=>'apartment','name'=> 'Apartment' ],
            "2"=> ['id'=>'duplex','name'=> 'Duplex' ],
            "3"=> ['id'=>'studio','name'=> 'Studio' ],
            "4"=> ['id'=>'town-house','name'=> 'Town House' ],
            "5"=> ['id'=>'twin-house','name'=> 'Twin House' ],
            "6"=> ['id'=>'pent-house','name'=> 'Pent House' ],
            "7"=> ['id'=>'villa','name'=> 'Villa' ],
            "8"=> ['id'=>'office','name'=> 'Office' ],
            "9"=> ['id'=>'store','name'=> 'Store' ],
            "10"=> ['id'=>'chalet','name'=> 'Chalet' ],
            "11"=> ['id'=>'chalet-with-garden','name'=> 'Chalet with garden' ],
            "12"=> ['id'=>'pharmacy','name'=> 'Pharmacy' ],
            "13"=> ['id'=>'clinic','name'=> 'Clinic' ],
            "14"=> ['id'=>'laboratory','name'=> 'Laboratory' ],
        ];
        $this->Property_TypeArr = $Property_TypeArr ;


        $this->locations = Location::all();
        $this->DeveloperArr = Developer::all();

        $ListingView_Arr = [
            "1"=> ['id'=>'main-street','name'=> 'Main Street' ],
            "2"=> ['id'=>'seaview','name'=> 'Seaview' ],
            "3"=> ['id'=>'lakeview','name'=> 'Lakeview' ],
            "4"=> ['id'=>'nileview','name'=> 'Nileview' ],
        ];
        $this->ListingView_Arr = $ListingView_Arr ;


    }


    public function render(): View|Closure|string
    {
        return view('components.main-block.search-form-right');
    }
}
