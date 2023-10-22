<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\Controller;
use App\Models\admin\Developer;
use App\Models\admin\Listing;
use App\Models\admin\Location;
use DB;
use Illuminate\Http\Request;

class UpdateListingDataController extends AdminMainController
{
    public function update()
    {

        $Developers = Developer::withTrashed()->get();

        foreach ($Developers as $Developer){

            $projects_count = Listing::Project()
                ->where('is_published', true)
                ->where('developer_id',$Developer->id)
                ->count();

            $units_count = Listing::where('listing_type','!=','Project')
                ->where('is_published', true)
                ->where('developer_id',$Developer->id)
                ->count();

            $Developer->projects_count = $projects_count;
            $Developer->units_count = $units_count;
            $Developer->save();

        }


        $Locations = Location::withTrashed()->get();

        foreach ($Locations as $Location){

            $projects_count = Listing::where('listing_type','=','Project')
                ->where('is_published', true)
                ->where('location_id',$Location->id)
                ->count();

            $units_count = Listing::where('listing_type','!=','Project')
                ->where('is_published', true)
                ->where('location_id',$Location->id)
                ->count();

            $Location->projects_count = $projects_count;
            $Location->units_count = $units_count;
            $Location->save();

        }





        return view('admin.listing.update_listing_data',compact('Developers'));
    }
}
