@extends('web.layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! Breadcrumbs::render('developer_list') !!}
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div class="text-center def_heading">
                    <h1 class="h1_def"> {{__('web/developer.breadcrumbs')}} </h1>
                    <p class="mb-0 p_def"> {{__('web/developer.text')}}</p>
                </div>
            </div>
        </div>
    </div>


        <div class="container section-space--sm">
            <div class="row g-4 DevelopersList">
                @foreach($Developers as $developer)
                    <div class="col-xl-3 col-md-4X col-6X developer_col text-center">
                        <a href="{{route('page_developer_view',$developer->slug)}}">
                            <div class="developer_img_div">
                                <img src="{{getPhotoPath($developer->photo_thum_1,"developer")}}" alt="image" class="developer_list_img">
                            </div>
                        </a>
                        <div class="text-center">
                            <h2 class="crop_line_1">
                                <a href="{{route('page_developer_view',$developer->slug)}}">{{$developer->name}}</a>
                            </h2>
                            <div class="icons_div">
                                <div class="icon">
                                    <i class="fas fa-hotel"></i>
                                    <span class="print_text"><span class="print_num En_Font">{{ $developer->projects_count }}</span>  {{__('web/developer.project')}}</span>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bed"></i>
                                    <span class="print_text"><span class="print_num En_Font">{{ $developer->units_count }}</span>  {{__('web/developer.unit')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    <div class="container section-space--sm">
        <div class="d-flex justify-content-center">
            @if($Developers instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $Developers->links('web.layouts.inc.pagination') }}
            @endif
        </div>
    </div>

@endsection
