<?php

namespace App\Http\Controllers;

use App\Helpers\AdminHelper;
use App\Models\admin\config\Amenity;
use App\Models\admin\config\DefPhoto;
use App\Models\admin\config\MetaTag;

use App\Models\admin\config\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Phattarachai\LaravelMobileDetect\Agent;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class WebMainController extends Controller
{


    public $pageView;

    public function __construct()
    {



        $stopCash = 0 ;

        $agent = new Agent();
        View::share('agent', $agent);

        $this->WebConfig = self::getWebConfig($stopCash);
        View::share('WebConfig', $this->WebConfig);

        $DefPhotoList = self::getDefPhotoList($stopCash);
        View::share('DefPhotoList', $DefPhotoList);

       $amenities =  self::getDefAmenity($stopCash);
       View::share('amenities', $amenities);

        $pageView = [
            'SelMenu' => '',
            'slug' => null,
        ];

        $this->pageView = $pageView ;
        View::share('pageView', $pageView);
    }





#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text
    static function printSeoMeta($row,$defPhoto="logo",$sendArr=array()){
        $lang = thisCurrentLocale();

        $type = AdminHelper::arrIsset($sendArr,'type','website');
        $siteName = self::getWebConfig();

        if($row->photo){
            $defImage = $row->photo ;
        }else{
            $GetdefImage = self::getDefPhotoById($defPhoto);
            $defImage =optional($GetdefImage)->photo;
        }
        if($defImage){
            $defImage = defImagesDir($defImage);
        }

        SEOMeta::setTitle($row->translate($lang)->g_title ?? "");
        SEOMeta::setDescription($row->translate($lang)->g_des ?? "");
        SEOMeta::addMeta('article:published_time', $row->published_at ?? "" , 'property');

        OpenGraph::setTitle($row->translate($lang)->g_title ?? "");
        OpenGraph::setDescription($row->translate($lang)->g_des ?? "" );
        OpenGraph::addProperty('type', $type);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addImage($defImage);
        OpenGraph::setSiteName($siteName->translate($lang)->name ?? "");

        TwitterCard::setTitle($row->translate($lang)->g_title ?? "");
        TwitterCard::setDescription($row->translate($lang)->g_des ?? "");
        TwitterCard::setUrl(url()->current());
        TwitterCard::setImage($defImage);
        TwitterCard::setImage($defImage);
        TwitterCard::setType('summary_large_image');


    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getMeatByCatId
    static function getMeatByCatId($cat_id){

        $WebMeta = Cache::remember('WebMeta_Cash',config('app.meta_tage_cash'), function (){
            return  MetaTag::with('translation')->get()->keyBy('cat_id');
        });

        if ($WebMeta->has($cat_id)) {
            return $WebMeta[$cat_id] ;
        }else{
            return $WebMeta['home'] ;
        }
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getDefPhotoById
    static function getDefPhotoById($cat_id){

        $DefPhoto = Cache::remember('DefPhoto_Cash',config('app.def_photo_cash'), function (){
            return  DefPhoto::get()->keyBy('cat_id');
        });

        if ($DefPhoto->has($cat_id)) {
            return $DefPhoto[$cat_id] ;
        }else{
            return $DefPhoto['dark-logo'] ;
        }
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getWebConfig
    static function getWebConfig($stopCash=0){
        if($stopCash){
            $WebConfig = Setting::where('id' , 1)->with('translation')->first();
        }else{
            $WebConfig = Cache::remember('WebConfig_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  Setting::where('id' , 1)->with('translation')->first();
            });
        }
        return $WebConfig ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getWebConfig
    static function getDefPhotoList($stopCash=0){

        if($stopCash){
            $DefPhotoList = DefPhoto::get()->keyBy('cat_id');
        }else{
            $DefPhotoList = Cache::remember('DefPhotoList_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  DefPhoto::get()->keyBy('cat_id');
            });
        }
        return $DefPhotoList ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getWebConfig
    static function getDefAmenity($stopCash=0){
        if($stopCash){
            $amenities = Amenity::query()
                ->with('translation')
                ->get();
        }else{
            $amenities = Cache::remember('DefAmenity_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  Amenity::query()->with('translation')->get();
            });
        }
        return $amenities ;
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


}
