<div class="bg-neutral-0 rounded-4 p-2 blog_li">
    <div class="blog_photo_div">
        <a href="{{route('page_blogView',[$post->getCatName->slug,$post->slug])}}" class="link d-block rounded-4">
            <img src="{{getPhotoPath($post->photo,"blog")}}" alt="{{$post->name}}" class="blog_img rounded-4">
        </a>
    </div>

    <div class="p-5 pt-8">
        <h2 class="mb-1 crop_line_1">
            <a href="{{route('page_blogView',[$post->getCatName->slug,$post->slug])}}" class="link clr-neutral-700 :clr-primary-300">
                {{$post->name}}
            </a>
        </h2>
        <p class="mb-3 crop_line_3"> {!! $post->seoDes() !!}</p>
        <div class="read_more">
            <a href="{{route('page_blogView',[$post->getCatName->slug,$post->slug])}}"
               class="btn btn-outline-primary py-2 px-5 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold  float-right">
                {{__('web/blog.read-more')}}
            </a>
        </div>
    </div>
</div>
