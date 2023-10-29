<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\WebMainController;
use App\Models\admin\Developer;
use App\Models\admin\Listing;
use App\Models\admin\Post;
use Illuminate\Http\Request;

class WebDeveloperController extends WebMainController
{
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     DevelopersList
    public function DevelopersList()
    {
        $Meta = parent::getMeatByCatId('developer');
        parent::printSeoMeta($Meta,'developer');
        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'Developers' ;

        $Developers = Developer::getDeveloperList()->paginate(16);
        return view('web.developers_index')->with(
            [
                'pageView'=>$pageView,
                'Developers'=>$Developers,
            ]
        );
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     DeveloperView
    public function DeveloperView($slug)
    {
        $developer = Developer::getDeveloperList()
            ->where('slug',$slug)
            ->firstOrFail();

        parent::printSeoMeta($developer,'developer');
        $pageView = $this->pageView ;
        $pageView['SelMenu'] = 'Developers' ;


        $projects= Listing::def()
            ->where('developer_id',$developer->id)
            ->where('listing_type','Project')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'compound_page');


        $units= Listing::def()
            ->where('developer_id',$developer->id)
            ->where('listing_type','Unit')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'property_page');

        $posts = Post::def()
            ->where('developer_id',$developer->id)
            ->with('getCatName')
            ->orderBy('published_at','desc')
            ->limit(15)
            ->get();


        return view('web.developers_view')->with(
            [
                'pageView'=>$pageView,
                'developer'=>$developer,
                'projects'=>$projects,
                'units'=>$units,
                'posts'=>$posts,
            ]
        );


    }

}
