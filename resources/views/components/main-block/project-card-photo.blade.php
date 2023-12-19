<div class="listing-card {{$cardstyle}}">
    <div class="listing-card__img img_div">
        <img src="{{getPhotoPath($project->photo,"blog")}}" alt="image" class="img-fluid w-100">
    </div>
    <div class="listing-card__content">

            <div class="d-flex align-items-center justify-content-end">
                <span class="d-inline-block py-2 px-5 rounded-pill bg-tertiary-300 clr-neutral-900 FS_16"> {{ getProjectStatus($project->status) }} </span>
            </div>
            <div class="listing-card__content-is listing_card_content">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="project_type"> {{ getProjectTypeName($project->project_type)}} </span>
                    <span class="d-inline-block clr-tertiary-300 project_price">
                        <span class="FS_18 fw-normal clr-neutral-0"> {{ __('web/def.starting-from') }}</span>
                       {{ number_format($project->price) }}
                    </span>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h4 class="project_name crop_line_2">
                        <a   href="{{route('page_ListView',$project->slug)}}" class="link clr-neutral-0 :clr-neutral-0"> {{$project->name}} </a>
                    </h4>
                    <div class="d-flex">
                        <span class="material-symbols-outlined mat-icon clr-tertiary-300"> distance </span>
                        <a href="{{route('page_locationView',$project->locationName->slug)}}">
                            <span class="clr-neutral-0 project_locationName"> {{$project->locationName->name}} </span>
                        </a>
                    </div>
                    <div class="project_card_readmore">
                        <a href="{{route('page_ListView',$project->slug)}}" class="btn btn-outline-secondary rounded-pill py-3X px-6x">{{ __('web/def.units-read-more')}} </a>
                    </div>
                </div>
            </div>
    </div>
</div>
