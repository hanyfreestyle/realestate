<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Category;
use App\Models\admin\Developer;
use App\Models\admin\Listing;
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
#|||||||||||||||||||||||||||||||||||||| #     DevelopersPage
    public function DevelopersPage()
    {
        $Meta = parent::getMeatByCatId('developer');
        parent::printSeoMeta($Meta,'developer');

        $Developers = Developer::getDeveloperList()
            ->paginate(16);


        return view('web.developers_index',compact('Developers'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     DeveloperView
    public function DeveloperView($slug)
    {
        $Developer = Developer::getDeveloperList()
            ->where('slug',$slug)
            ->firstOrFail();

        parent::printSeoMeta($Developer,'developer');

       $Projects= Listing::query()
            ->where('developer_id',$Developer->id)
            ->where('listing_type','Project')
            ->with('locationName')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'compound_page')
        ;


        $Units= Listing::query()
            ->where('developer_id',$Developer->id)
            ->where('listing_type','Unit')
            ->orderBy('id','desc')
            ->paginate(12, ['*'], 'property_page')
        ;

        $Posts = Post::query()
            ->where('developer_id',$Developer->id)
            ->orderBy('id','asc')
            ->limit(10)
            ->get()
        ;

     return view('web.developers_view',compact('Developer','Projects','Units','Posts'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     BlogPageList
    public function BlogPageList()
    {
        $Meta = parent::getMeatByCatId('blog');
        parent::printSeoMeta($Meta,'blog');

        $posts = Post::def()
            ->with('getCatName')
            ->orderBy('id','desc')
            ->paginate(4);

        return view('web.blog_index',compact('posts'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     BlogCatList
    public function BlogCatList($catSlug)
    {
        $category = Category::query()
            ->where('is_active',true)
            ->where('slug',$catSlug)
            ->firstOrFail();
        parent::printSeoMeta($category,'blog');

        $posts = Post::def()
            ->where('category_id',$category->id)
            ->with('getCatName')
            ->orderBy('id','desc')
            ->paginate(9);



        return view('web.blog_cat_index',compact('posts','category'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text
    public function BlogView($catSlug,$postSlug)
    {

        $post = Post::query()
            ->where('slug',$postSlug)
            ->with('location')
            ->firstOrFail()
        ;
        parent::printSeoMeta($post,'blog');

        $category = Category::query()
            ->where('is_active',true)
            ->where('slug',$catSlug)
            ->firstOrFail();
        ;


        if($post->listing_id == null){
            $project_tag = null ;
        }else{
            $project_tag = Listing::query()
                ->where('id',$post->listing_id)
                ->with('developerName')
                ->withCount('units')
                ->with('units')
                ->with('locationName')
                ->first();
        }


        if($post->location_id == null){
            $relatedProjects = null;
        }else{
            $relatedProjects = Listing::query()
                ->where('listing_type','Project')
                ->where('location_id',$post->location_id)
                ->with('locationName')
                ->limit(10)
                ->get();
            ;

            if(count($relatedProjects) == 0){
                $relatedProjects = null;
            }


        }


        $relatedPosts = Post::def()
            ->where('category_id',$category->id)
            ->where('id','!=',$post->id)
            ->with('getCatName')
            ->orderBy('id','desc')
            ->limit('10')
            ->get();



        $other_project = Listing::query()
            ->where('parent_id',null)
            ->where('is_published',true)
            ->inRandomOrder()
            ->limit(6)
            ->get();

        return view('web.blog_view')->with(
            [
             'post'=>$post,
             'category'=>$category,
             'project_tag'=>$project_tag,
             'relatedProjects'=>$relatedProjects,
             'relatedPosts'=>$relatedPosts,
             'other_project'=>$other_project,
            ]
        );
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text



}
