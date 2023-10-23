@extends('web.layouts.app')
@section('content')

@include('web.layouts.inc.home_slider')


<x-home-page.featured-locations/>

<x-home-page.featured-developers/>

<x-blog.related-posts-slider :posts="$relatedPosts" titel="{{__('web/home.latest-real-estate-updates')}}" />

@endsection
