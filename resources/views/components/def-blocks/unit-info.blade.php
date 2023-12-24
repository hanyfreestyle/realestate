<div class="p-6 bg-neutral-0 rounded-4 border border-neutral-40 mb-10 ListingViewInfo">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="py-2 px-5 bg-primary-50 rounded-pill pro_type">
            <span class="clr-primary-300 d-inline-block mb-0 "> {{ getPropertyTypeName($row->property_type) }} </span>
        </div>

        <ul class="list list-row gap-3 align-items-center ListingViewInfo_Social">
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        </ul>
    </div>
    <h1 class="mt-4 mb-5">
        {{$row->name}}
    </h1>
    <div class="row mt-5" >
        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> payments </span>
                <p class="mb-0 pro_info">
                    {{ __('web/def.start-from') }} <span class="price"> {{number_format($row->price)}} </span>
                </p>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> distance </span>
                <p class="mb-0 crop_line_1 pro_info">
                    <a href="{{route('page_locationView',$row->locationName->slug)}}">
                        {{$row->locationName->name}}
                    </a>
                </p>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> real_estate_agent </span>
                <p class="mb-0 crop_line_1 pro_info">
                    <a class="" href="{{route('page_developer_view',$row->developerName->slug)}}">
                        {{$row->developerName->name}}
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="hr-dashed"></div>

    <div class="row mt-5" >
        @if(intval($row->rooms) != 0)
            <div class="col-lg-2 mb-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined mat-icon iconColor">  home_work  </span>
                    <p class="mb-0 pro_info">
                        {{$row->rooms}} {{__('web/def.units-room')}}
                    </p>
                </div>
            </div>
        @endif

        @if(intval($row->baths) != 0)
            <div class="col-lg-2 mb-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined mat-icon iconColor"> bathtub </span>
                    <p class="mb-0 crop_line_1 pro_info">
                        {{$row->baths}} {{__('web/def.units-bath')}}
                    </p>
                </div>
            </div>
        @endif

        @if(intval($row->area) != 0)
            <div class="col-lg-2 mb-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined mat-icon iconColor"> drag_pan </span>
                    <p class="mb-0 crop_line_1 pro_info">
                        {{$row->area}} {{__('web/def.units-area')}} <sup>2</sup>
                    </p>
                </div>
            </div>
        @endif
    </div>
</div>

