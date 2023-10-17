@if(count($projects) > 0)
    <div class="section-space pt-xl-0 bg-primary-5p">
        <div class="container p-md-5">
            <div class="row g-md-0">
                <div class="col-12 mb-3 pb-3">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-12">
                            <h2 class="mb-0 def_h2_out">{{$titel}}</h2>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="project-other-project-container">
                        <div class="swiper project-other-project">
                            <div class="swiper-wrapper">
                                @foreach($projects as $project)
                                    <div class="swiper-slide ps-2">
                                        <div class="listing-card">
                                            <div class="listing-card__img other_project_card">
                                                <img src="{{getPhotoPath($project->photo_thum_1,"blog")}}" alt="image" class="">
                                            </div>
                                            <div class="listing-card__content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="#" class="link d-inline-block py-2 px-5 rounded-pill bg-secondary-200 clr-neutral-900"> {{$project->status}} </a>
                                                </div>

                                                <div class="listing-card__content-is">

                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="fs-14 fw-medium d-inline-block clr-neutral-0">  {{$project->project_type}} </span>
                                                        <span class="d-inline-block fs-20 fw-medium clr-tertiary-300">
                                                            <span class="fs-16 fw-normal clr-neutral-0"> {{ __('web/def.starting-from') }} </span> {{ number_format($project->price) }} </span>
                                                    </div>

                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <h4 class="project_card_name">
                                                            <a href="#" class="link clr-neutral-0 :clr-neutral-0"> {{$project->name}} </a>
                                                        </h4>
                                                        <div class="d-flex align-items-centerX gap-2X">
                                                            <span class="material-symbols-outlined mat-icon clr-tertiary-300"> distance </span>
                                                            <span class="clr-neutral-0 "> {{$project->locationName->name}} </span>
                                                        </div>
                                                        <div class="project_card_readmore ">
                                                            <a href="#" class="btn btn-outline-secondary rounded-pill py-3 px-6 fw-semibold">{{ __('web/def.units-read-more')}} </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination project-other-project__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
