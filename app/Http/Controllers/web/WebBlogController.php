<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Category;
use App\Models\admin\Listing;
use App\Models\admin\Post;
use Illuminate\Http\Request;

class WebBlogController extends WebMainController
{

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     BlogList
    public function BlogList()
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



}
