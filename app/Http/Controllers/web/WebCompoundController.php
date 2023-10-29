<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Listing;
use Illuminate\Http\Request;

class WebCompoundController extends WebMainController
{

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CompoundsList
    public function CompoundsList()
    {

        $Meta = parent::getMeatByCatId('compounds');
        parent::printSeoMeta($Meta);

        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'Compounds' ;

        $projects= Listing::def()
            ->where('listing_type','Project')
            ->with('developerName')

            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'compound_page');


        $units= Listing::def()
            ->where('listing_type','Unit')
            ->with('developerName')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'property_page');


        return view('web.compounds_list')->with(
            [
                'pageView'=>$pageView,
                'projects'=>$projects,
                'units'=>$units,
            ]
        );
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForSaleList
    public function ForSaleList()
    {
        $Meta = parent::getMeatByCatId('for-sale');
        parent::printSeoMeta($Meta);

        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'ForSale' ;

        $units= Listing::def()
            ->where('listing_type','!=','Project')
            ->with('developerName')
            ->orderBy('id','desc')
            ->paginate(12);

        return view('web.for_sale_list')->with(
            [
                'pageView'=>$pageView,
                'units'=>$units,
            ]
        );
    }




}
