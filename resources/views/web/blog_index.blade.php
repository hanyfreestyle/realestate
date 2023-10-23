@extends('web.layouts.app')
@section('content')

    <x-web.block-breadcrumbs>
        {!! Breadcrumbs::render('blog') !!}
    </x-web.block-breadcrumbs>



    <div class="BlogList-col9 bg-primary-5p">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h1>{!! __('web/blog.h1') !!}</h1>
                    <ul class="list gap-6 blogas_list">
                        @foreach($posts as $post)
                            <li>
                                <x-blog.blog-card-list :post="$post"/>
                            </li>
                        @endforeach
                    </ul>

                    <x-web.block-pagination :rows="$posts" />

                </div>
                <div class="col-lg-4 mobile_stop">
                    <div class="section-space--smX">
                        @include('web.side_blog')
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <x-main-block.category-list/>
    </div>
@endsection
