<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Category;

use App\Models\admin\Developer;
use App\Models\admin\Listing;
use App\Models\admin\Location;
use App\Models\admin\Post;
use Illuminate\Http\Request;

class PageController extends WebMainController
{

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
       $Meta = parent::getMeatByCatId('home');
       parent::printSeoMeta($Meta);

        $relatedPosts = Post::def()
            ->orderBy('id','desc')
            ->limit('10')
            ->get();

        return view('web.index')->with(
           [
              'relatedPosts'=>$relatedPosts,
           ]
       );
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function contactUs()
    {
        $Meta = parent::getMeatByCatId('contact-us');
        parent::printSeoMeta($Meta);
        return view('web.index');
    }






#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ListView
    public function ListView($listingid)
    {
        dd($listingid);
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     LocationView

    public function LocationView($slug)
    {

        $location = Location::query()
            ->where('is_active',true)
            ->where('slug',$slug)
            ->firstOrFail();

        $trees = Location::find($location->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        $listId = Location::find($location->id)->descendantsAndSelf()->orderBy('depth','asc')
            ->pluck('id');


        $projects= Listing::def()
            ->where('listing_type','Project')
           // ->where('location_id',$location->id)
            ->whereIn('location_id',$listId)
            ->with('developerName')

            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'compound_page');


        $units= Listing::def()
            ->where('listing_type','Unit')
            //->where('location_id',$location->id)
            ->whereIn('location_id',$listId)
            ->with('developerName')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'property_page');


        return view('web.location_view')->with(
            [
                'projects'=>$projects,
                'units'=>$units,
                'trees'=>$trees,
            ]
        );

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text



}
