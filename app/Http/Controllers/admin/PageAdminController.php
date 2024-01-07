<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\PageRequest;
use App\Models\admin\Page;
use App\Models\admin\PageTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;


class PageAdminController extends AdminMainController
{
    public $controllerName ;
    public $getAllPagesData ;

    function __construct(
        $controllerName = 'pages'
    )
    {

        $this->getAllPagesData = self::getAllPagesData();
        View::share('getAllPagesData', $this->getAllPagesData);



        parent::__construct();
        $this->controllerName = $controllerName;
        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$controllerName.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.lang_file') as $key=>$lang){
            Cache::forget('PageLinksData_'.$key);
        }
    }


    function ChekcData(){

//        $Pages = Page::all();
//        foreach ($Pages as $page){
//            $countIs = Page::where('hash', $page->hash)->count();
//            $page->is_count = $countIs;
//            $page->save();
//        }

//        $Pages = Page::where('compound_id',null)->get();
//        $Pages = Page::where('compound_id','!=',null)->get();
//
//        $Pages = Page::where('location_id',null)->get();
//        $Pages = Page::where('location_id','!=',null)->get();
//
//        $Pages = Page::where('location_count','>',1)->get();
//
//        $Pages = Page::where('location_id',null)->where('compound_id',null)->get();
//



//        $Pages = Page::all();
//        foreach ($Pages as $page){
//            if($page->id == 0){
//                // dd($page);
//
//                $data = json_decode($page->slug);
//                //dd($data);
//
//                if(isset($data->location)){
//                    $page->location_id  = $data->location[0] ;
//                    $page->location_count  = count($data->location) ;
//                }
//                if(isset($data->compound)){
//                    $page->compound_id  = $data->compound[0] ;
//                    $page->compound_count  = count($data->compound) ;
//                }
//
//                if(isset($data->property_type)){
//                    $page->property_type  = $data->property_type ;
//                    $page->property_count  = count($data->property_type) ;
//                }
//
//                $page->save();
//            }
//        }

//        $Pages = Page::all();
//        foreach ($Pages as $page){
//            if($page->id != 0){
//
//                $hash_new = '?';
//
//                if($page->location_id != null){
//                    $hash_new .= "location=".$page->location_id;
//                }
//                if($page->compound_id != null){
//                    if($page->location_id != null){
//                        $hash_new .='&';
//                    }
//                    $hash_new .= "compound=".$page->compound_id;
//                }
//
//                if($page->property_type != null){
//                    $page->property_type = json_decode($page->property_type,true);
//                    $hash_new .= "&property_type=".implode(',', $page->property_type);
//                }
//
//                $page->hash_new = $hash_new ;
//                $page->save();
//            }
//        }

//        $Pages = Page::all();
//        foreach ($Pages as $page){
//            if($page->id != 0){
//                if($page->hash == $page->hash_new){
//                    $page->hash_check = 1 ;
//                }else{
//                    $page->hash_check = 0 ;
//                }
//                $page->save();
//            }
//        }

    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' => __('admin/menu.pages'),'restore'=> 1 ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['Trashed'] = Page::onlyTrashed()->count();











        $Pages = self::getSelectQuery( Page::where('id',"!=","0"));

        return view('admin.page.index',compact('pageData','Pages'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $sendArr = ['TitlePage' => __('admin/menu.pages') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "deleteList";
        $Pages = self::getSelectQuery(Page::onlyTrashed());

        return view('admin.page.index',compact('pageData','Pages'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {

        $sendArr = ['TitlePage' => __('admin/menu.pages') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";

        $Page = Page::findOrNew(0);
        $Page->links = array();
        return view('admin.page.form',compact('pageData','Page'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $sendArr = ['TitlePage' => __('admin/menu.pages') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";

        $Page = Page::findOrFail($id);
        if($Page->links == null){
            $Page->links = array();
        }





       // $AllPages = Page::where('id','!=',$id)->with('translation')->pluck('id','name')->all();
      //  $AllPages = Page::where('id','!=',$id)->with('translation')->get();
//          dd($AllPages);
//        $AllPages = array();




//        dd($Page);

//        $Developers = Developer::all();
//        $Categories = Category::all();
//        $Locations = Location::all();
        return view('admin.page.form',compact('pageData','Page'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(PageRequest $request, $id=0)
    {


        $saveData =  Page::findOrNew($id);
//        $saveData->slug = AdminHelper::Url_Slug($request->slug);
//        $saveData->category_id = $request->input('category_id');
//        $saveData->developer_id = $request->input('developer_id');
        $saveData->links = $request->input('links');
        $saveData->is_active = intval((bool) $request->input( 'is_active'));
        $saveData->save();




        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = PageTranslation::where('page_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->page_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->save();
        }


        self::ClearCash();

        if($id == '0'){
            return redirect(route('pages.index'))->with('Add.Done',"");
        }else{
            return back();
            ////return redirect(route('post.index'))->with('Edit.Done',"");
        }
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Page::findOrFail($id);
        $deleteRow->delete();
        return redirect(route('pages.index'))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function Restore($id)
    {
        Page::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  Page::onlyTrashed()->where('id',$id)->first();
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
    }

}
