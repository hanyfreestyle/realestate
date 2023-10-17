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

                    <x-blocks.description  :row="$post" title="{{__('web/blog.h2-description')}}"/>

                    @if($project_tag != null)
                        @if($project_tag->youtube_url)
                            <x-blocks.youtube :row="$project_tag" title="{{__('web/blog.h2-video')}}"/>
                        @endif

                        @if($project_tag->amenity)
                            <x-blocks.amenities :row="$project_tag" title="{{__('web/blog.h2-amenities')}}" />
                        @endif
                    @endif


                    <?php

                    //                    require_once 'Project_Units.php';

                    ?>
                </div>
                <?php
                //                require_once 'Blog_View_Inc.php'
                ?>

            </div>
        </div>
    </div>

@endsection
