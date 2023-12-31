<div class="col-12 mb-5 ">
    <div class="property-card property-card--row">

        <div class="property-card__head">
            <div class="swiper-slide ">
                <div class="property-card__img unit_card_img">
                    <a href="{{route('page_ListView',$unit->slug)}}">
                        <img src="{{getPhotoPath($unit->photo_thum_1,"blog")}}" alt="image">
                    </a>
                </div>
            </div>

            <a href="#" class="link property-card__tag d-inline-block bg-neutral-0 :bg-primary-300 clr-primary-300 :clr-neutral-0 py-2 px-4 rounded-pill fw-medium">
                {{ getPropertyTypeName($unit->property_type) }}
            </a>
            <button class="property-card__fav w-10 h-10 rounded-circle bg-neutral-0 d-grid place-content-center border-0 clr-primary-300">
                <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> favorite </span>
            </button>
        </div>



        <div class="property-card__content">

            <div class="property-card__body">
                <div class="d-flex align-items-center gap-1 mb-2">
                    <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                    <span class="d-inline-block">
                        <a href="{{route('page_locationView',$unit->locationName->slug)}}">{{$unit->locationName->name}}</a>
                    </span>
                </div>

                <a href="{{route('page_ListView',$unit->slug)}}" class="link d-block clr-neutral-700 :clr-primary-300 fs-20 fw-medium mb-3">
                    <h3 class="def_units_name crop_line_2">{{$unit->name}}</h3>
                </a>

                <ul class="list list-row flex-wrap dotted-divider">
                    @if(intval($unit->rooms) != 0)
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> home_work </span>
                            <span class="d-block fs-14"> {{$unit->rooms}} {{__('web/def.units-room')}}</span>
                        </li>
                    @endif

                    @if(intval($unit->baths) != 0)
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> bathtub </span>
                            <span class="d-block fs-14"> {{$unit->baths}} {{__('web/def.units-bath')}}</span>
                        </li>
                    @endif

                    @if(intval($unit->area) != 0)
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> zoom_out_map </span>
                            <div class="d-block fs-14">{{$unit->area}} {{__('web/def.units-area')}} <sup>2</sup></div>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="property-card__body py-0">
                <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <ul class="list list-row flex-wrap gap-3 justify-content-center">
                        <li>
                            <a href="#">
                                <div class="w-11 h-11 rounded-circle bg-primary-300 d-grid place-content-center">
                                    <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-0 fw-300"> phone_in_talk </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="w-11 h-11 rounded-circle bg-secondary-300 d-grid place-content-center flex-shrink-0">
                                    <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"><i class="fa-brands fa-whatsapp"></i></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="w-11 h-11 rounded-circle bg-tertiary-300 d-grid place-content-center flex-shrink-0">
                                    <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> mark_as_unread </span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a href="{{route('page_ListView',$unit->slug)}}" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold">
                        {{__('web/def.units-read-more')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
