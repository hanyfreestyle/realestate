@extends('web.layouts.app')
@section('content')
    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('blogCatList',$category) }}
    </x-web.block-breadcrumbs>

    <div class="FixedBreadcrumbLine BlogList bg-primary-5p">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-12">
                    <h1 class="h1_def">{!! $category->name !!}</h1>
                    <div class="row blogas_row">
                        @foreach($posts as $post)
                            <div class="col-lg-4 mb-5">
                                <x-blog.blog-card-list :post="$post"/>
                            </div>
                        @endforeach
                    </div>
                    <x-web.block-pagination :rows="$posts" />
                </div>
            </div>
        </div>
        <hr>
        <x-main-block.category-list/>
    </div>
@endsection
