@extends('web.layouts.app')
@section('content')
    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('developer_view',$developer) }}
    </x-web.block-breadcrumbs>

    <div class="bg-primary-5p def_pb_100">
        <div class="container">
            <div class="row developer_view mb-5">
                <div class="col-md-12 text-center ">
                    <div class="developer_img_div">
                        <img src="{{getPhotoPath($developer->photo_thum_1,"developer")}}" alt="image" class="developer_list_img">
                    </div>
                </div>

                <div class="col-md-12 text-center ">
                    <h1 class="def_h1 text-center mt-3"> {{__('web/developer.h1-compounds')}} {{$developer->name}} </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 ListProjectUnitsCard">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if(!isset($_GET['property_page'])) active @endif() "
                                    id="pills-home-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-home"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-home"> {{$projects->total()}} {{__('web/developer.project') }}  </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if(isset($_GET['property_page'])) active @endif()"
                                    id="pills-profile-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-profile"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-profile">{{$units->total()}} {{ __('web/developer.unit')}}</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade @if(!isset($_GET['property_page'])) show active @endif() " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row g-4 pb-5">
                                @foreach($projects as $project)
                                    <div class="col-lg-6 mb-0">
                                        <x-blog.related-projects-card :project="$project" cardstyle="tab_card" />
                                    </div>
                                @endforeach
                            </div>
                            <x-main-block.pagination :row="$projects"/>
                        </div>

                        <div class="tab-pane fade @if(isset($_GET['property_page'])) show active @endif() " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                @foreach($units as $unit)
                                    <x-main-block.units-card :unit="$unit" />
                                @endforeach
                            </div>
                            <x-main-block.pagination :row="$units"/>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <h3 class="def_h_rightSide">{{ __('web/developer.h1-news') }} {{$developer->name}}</h3>
                    <hr>
                    @foreach($posts as $post)
                        <x-main-block.blog-post-right-side :post="$post" />
                    @endforeach
                </div>



            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $developer->des !!}
                </div>
            </div>
        </div>
    </div>

@endsection
