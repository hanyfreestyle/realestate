@extends('web.layouts.app')
@section('content')

{{--@include('web.layouts.inc.home_slider')--}}


<section class="section-space discover-location-section">
    <img src="{{ defWebAssets('img/category-section-el.png') }}" alt="image" class="img-fluid d-none d-xxl-block position-absolute category-section-element">
    <div class="section-space--sm-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center">
                        <h2 class="mt-4 def_h2_out mb-6"> {{__('web/home.featured-locations')}} </h2>
                        <p class="mb-0">{{__('web/home.featured-locations-text')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-md-0">
        <div class="row g-md-0">
            <div class="col-12">
                <div class="location-slider-container">
                    <div class="swiper location-slider">
                        <div class="swiper-wrapper">

                            @foreach($locations as $location)
                                <div class="swiper-slide">
                                    <div class="location-slider__card">
                                        <div class="location-slider__img location_slider_img">
                                            <img src="{{getPhotoPath($location->photo_thum_1,"location")}}" alt="image"  class="">
                                        </div>
                                        <div class="location-slider__content">

                                            <div class="d-flex align-items-center justify-content-between w-100">
                                                <a href="#" class="link d-flex flex-column gap-1 clr-neutral-0
                                                flex-grow-1">
                                                    <span class="d-block fs-20 fw-semibold"> {{$location->name}} </span>
                                                    <span class="d-block fs-14"> 20 {{__('web/def.project')}} </span>
                                                    <span class="d-block fs-14"> 170 {{__('web/def.units')}} </span>
                                                </a>
                                                <a href="#" class="link d-grid place-content-center w-9 h-9 border
                                                border-primary-50 rounded-circle clr-primary-50 :bg-primary-300 flex-shrink-0">
                                                    <span class="material-symbols-outlined mat-icon"> arrow_forward_ios </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination location-slider__pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-space pt-0">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div class="text-center">
                    <h2 class="mt-4 def_h2_out mb-5 pt-3"> {{__('web/home.featured-developers')}} </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="swiper team-slider">
                        <div class="swiper-wrapper">

                            @foreach($developers as $developer)
                                <div class="swiper-slide">
                                    <div class="dev_slider_card text-center">
                                        <div class="developer_img_div">
                                            <img src="{{getPhotoPath($developer->photo_thum_1,"developer")}}" alt="image" class="developer_list_img">
                                        </div>
                                    </div>
                                    <h4 class="mb-2 home_developer_name mt-5"> {{$developer->name}}</h4>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="swiper-pagination team-slider__pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-blog.related-posts-slider :posts="$relatedPosts" titel="{{__('web/home.latest-real-estate-updates')}}" />

@endsection
