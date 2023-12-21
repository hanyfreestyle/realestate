<div class="d-flex gap-6 RightSide_Blog mb-3">
    <div class="w-20 h-20 rounded-3 flex-shrink-0 img_div">
        <img src="{{getPhotoPath($post->photo_thum_1,"blog")}}" alt="{{$post->name}}" class="def_img_cover">
    </div>
    <div class="flex-grow-1">
        <h5 class="mb-0">
            <a href="{{route('page_blogView',[$post->getCatName->slug,$post->slug])}}" class="link clr-neutral-700 h1_name crop_line_2"> {{$post->name}} </a>
        </h5>
        <p class="mb-0 clr-neutral-500 published_at En_FontX">{{ $post->getFormatteDate()  }} </p>
    </div>
</div>
