@extends('web.layouts.app')
@section('content')

    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('blogCatList',$category) }}
    </x-web.block-breadcrumbs>



    <div class="BlogList-col9 bg-primary-5p">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-12">
                    <h1>{!! $category->name !!}</h1>
                    <div class="row blogas_row">
                        @foreach($posts as $post)
                            <div class="col-lg-4 mb-5">
                                <x-blog.blog-card-list :post="$post"/>
                            </div>
                        @endforeach
                    </div>
                    <x-web.block-pagination :rows="$posts" />
                </div>

{{--                <div class="col-lg-4 mobile_stop">--}}
{{--                    <div class="section-space--smX">--}}
{{--                        @include('web.side_blog')--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <hr>
        <x-blog.block-category-list/>

    </div>

@endsection
