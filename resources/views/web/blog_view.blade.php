@extends('web.layouts.app')
@section('content')

    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('post_view',$category,$post) }}
    </x-web.block-breadcrumbs>


    <div class="BlogView bg-primary-5p">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">

                    <x-blog.blog-body :post="$post"  :project="$project_tag"/>

                    @if($project_tag != null and $project_tag->units_count > 0 )

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
                            <h2 class="mb-0 def_h2_out"> {{__('web/blog.h2-properties-for-sale')}} ({{$project_tag->units_count}}) </h2>
                        </div>

                        @foreach($project_tag->units as $unit)
                            <x-blocks.units-card-list  :unit="$unit"  />
                        @endforeach

                        <div class="row mb-5 ">
                            <div class="col-12 text-center mb-lg-5">
                                <div class="show-more-units btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold">{{__('web/def.but-show-more')}}</div>
                            </div>
                        </div>
                    @endif

                    <x-blocks.description  :row="$post" title="{{__('web/blog.h2-description')}}"/>

                    @if($project_tag != null)
                        @if($project_tag->youtube_url)
                            <x-def-blocks.youtube :vcode="$project_tag->youtube_url" title="{{__('web/blog.h2-video')}}" />
                        @endif

                        @if($project_tag->amenity)
                            <x-def-blocks.amenities :senddata="$project_tag->amenity" title="{{__('web/blog.h2-amenities')}}" />
                        @endif
                    @endif

                </div>
                <div class="col-lg-4">
                    @if(count($relatedProjects)> 0)
                        <h4 class="mb-4 best_compounds_in crop_line_1">{{__('web/def.best-compounds-in')}} {{$relatedProjects->first()->locationName->name}}</h4>
                        <div class="row g-4 pb-5">
                            @foreach($relatedProjects as $project)
                                <x-blog.related-projects-card :project="$project" cardstyle="" />
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>



    <x-blog.related-posts-slider :posts="$relatedPosts" titel="{{__('web/blog.related-news')}}" />

    <x-blog.other-projects :projects="$other_project" titel="{{__('web/blog.other-projects')}}" />

@endsection
