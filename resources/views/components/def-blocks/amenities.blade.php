@if($senddata)
    <div class="p-6 bg-neutral-0 rounded-4 mb-10">
        @if($title)
            <h2 class="def_h2_blocks">{{$title}}</h2>
        @endif
        <div class="mb-5">
            <div class="row g-4">
                @foreach($amenities as $amenity)
                    @if(in_array($amenity->id,$senddata))
                        <div class="ty-compact-list col-6 col-lg-3 align-items-center gap-2">
                            <i class="{{$amenity->icon}}"></i>
                            <span class="d-inline-block"> {{$amenity->name}} </span>
                        </div>
                    @endif

                @endforeach
            </div>
        </div>

        <div class="ButDivCon">
            <div class="show-more btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold">{{__('web/def.but-show-more')}}</div>
        </div>
    </div>
@endif
