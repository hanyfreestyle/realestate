@extends('web.layouts.app')
@section('content')

    <div class=" bg-primary-5p">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    {!! Breadcrumbs::render('blog') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="BlogList-col9 bg-primary-5p">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h1>{!! __('web/blog.h1') !!}</h1>
                    <ul class="list gap-6">
                        @foreach($Posts as $Post)
                            <li>
                                <div class="bg-neutral-0 rounded-4 p-2">
                                    <a href="#" class="link d-block rounded-4 blog_img">
                                        <img src="./assets/imgs/unit_photo.jpg" alt="image" class="img-fluid rounded-4">
                                    </a>
                                    <div class="p-5 pt-8">
                                        <h2 class="mb-5">
                                            <a href="#" class="link clr-neutral-700 :clr-primary-300">
                                                {{$Post->name}}
                                                <br>
                                                {{$Post->id}}
                                            </a>
                                        </h2>
                                        <p class="mb-8"> Realtor Magazine is the official publication of the National Association of Realtors, providing real estate news, trends, and advice for real... </p>
                                        <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex
                                    align-items-center gap-1 fw-semibold"> Read More <span class="material-symbols-outlined mat-icon lh-1"> trending_flat </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="container section-space--sm">
                        <div class="d-flex justify-content-center">
                            @if($Posts instanceof \Illuminate\Pagination\AbstractPaginator)
                                {{ $Posts->links('web.layouts.inc.pagination') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mobile_stop">
                    <div class="section-space--smX">
                        @include('web.side_blog')
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection
