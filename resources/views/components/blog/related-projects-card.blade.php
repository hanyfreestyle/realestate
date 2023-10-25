<div class="col-md-6 col-xl-12">
    <div class="listing-card listing_card_relatedProjects">
        <div class="listing-card__img {{$cardstyle}}">
            <img src="{{getPhotoPath($project->photo,"blog")}}" alt="image" class="img-fluid w-100">
        </div>
        <div class="listing-card__content">
            <div class="d-flex align-items-center justify-content-end">
                <a href="#" class="link d-inline-block py-2 px-5 rounded-pill bg-tertiary-300 clr-neutral-900"> {{$project->status}} </a>
            </div>
            <div class="listing-card__content-is">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="fs-14 fw-medium d-inline-block clr-neutral-0"> {{$project->project_type}} </span>
                    <span class="d-inline-block fs-20 fw-medium clr-tertiary-300">
                        <span class="fs-16 fw-normal clr-neutral-0"> {{ __('web/def.starting-from') }}</span>
                       {{ number_format($project->price) }}
                    </span>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h4 class="project_card_name">
                        <a href="#" class="link clr-neutral-0 :clr-neutral-0 "> {{$project->name}} </a>
                    </h4>
                    <div class="d-flex align-items-centerX gap-2X">
                        <span class="material-symbols-outlined mat-icon clr-tertiary-300"> distance </span>
                        <span class="clr-neutral-0"> {{$project->locationName->name}} </span>
                    </div>
                    <div class="project_card_readmore ">
                        <a href="#" class="btn btn-outline-secondary rounded-pill py-3 px-6 fw-semibold">{{ __('web/def.units-read-more')}} </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
