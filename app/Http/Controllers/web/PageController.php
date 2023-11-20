<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;

use App\Models\admin\Listing;
use App\Models\admin\Location;
use App\Models\admin\Post;
use File;
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

        $description = null;
        $youtube = null;
        $amenities = null;


        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'HomePage' ;

        $unit= Listing::def()
            ->where('slug',$listingid)
            ->with('developerName')
            ->withCount('slider')
            ->with('slider')
            ->withCount('faqs')
            ->with('faqs')
            ->withCount('pro_units')
            ->with('pro_units')
            ->with('project')
            ->firstOrFail();

        parent::printSeoMeta($unit,'blog');

        $folderPath = public_path("ckfinder/userfiles/".$unit->slider_images_dir);
//      dd($folderPath);

        if(File::isDirectory($folderPath)){
            $old_slider = File::files($folderPath);
        }else{
            $old_slider = [];
        }



        if($unit->listing_type == 'Project'){
            $description = __('web/compound.listview-h2-des');
            $youtube = $unit->youtube_url ;
            $amenities = $unit->amenity ;
        }elseif ($unit->listing_type == 'Unit'){
           ///dd($unit);
        }

        return view('web.listing_view')->with(
            [
                'pageView'=>$pageView,
                'unit'=>$unit,
                'old_slider'=>$old_slider,

                'description'=>$description,
                'youtube'=>$youtube,
                'amenities'=>$amenities,

            ]
        );
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
