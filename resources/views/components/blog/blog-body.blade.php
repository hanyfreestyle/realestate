<div class="bg-neutral-0 rounded-4 p-2 mb-10">
    <div class="blog_photo_div">
                            <span href="#" class="link d-block rounded-4">
                                <img src="{{getPhotoPath($post->photo,"blog")}}" alt="image" class="blog_img rounded-4">
                            </span>
    </div>
    <div class="p-5 pt-8">
        <h1 class="mb-0">{{$post->name}}</h1>
        <div class="hr-dashed my-4"></div>
        <div class="row" >
            <div class="col-lg-3 mb-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined mat-icon iconColor"> calendar_month  </span>
                    <p class="mb-0"> {{$post->getFormatteDate()}} </p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined mat-icon iconColor"> distance </span>
                    <p class="mb-0">
                        <a href="{{route('page_locationView',$post->location->slug)}}">
                            {{$post->location->name}}
                        </a>
                    </p>
                </div>
            </div>

            @if($project != null)
                <div class="col-lg-4 mb-5">
                    <div class="d-flex align-items-center gap-2">
                        <span class="material-symbols-outlined mat-icon iconColor"> construction </span>
                        <p class="mb-0">
                            <a href="{{route('page_developer_view',$project->developerName->slug)}}">
                                {{$project->developerName->name}}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <span class="material-symbols-outlined mat-icon iconColor"> home_work   </span>
                        <p class="mb-0 crop_line_1">
                            <a href="{{route('page_ListView',$project->slug)}}">{{$project->name}}</a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
