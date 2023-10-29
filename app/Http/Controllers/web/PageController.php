<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;

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

        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'HomePage' ;

        $relatedPosts = Post::def()
            ->orderBy('id','desc')
            ->limit('10')
            ->get();

        return view('web.index')->with(
           [
               'pageView'=>$pageView,
               'relatedPosts'=>$relatedPosts,
           ]
       );
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


        parent::printSeoMeta($location,'developer');
        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'Compounds' ;

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
                'pageView'=>$pageView,
                'projects'=>$projects,
                'units'=>$units,
                'trees'=>$trees,
                'location'=>$location,
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
