<div class="bg-neutral-900 WebFooter">
    <div class="section-space--sm">
        <div class="container">
            <div class="row justify-content-md-center ">
                <div class="col-md-6 col-lg-6 mobile_footer_p">
                    <a href="{{route('page_index')}}" class="link d-inline-block mb-6">
                        <img src="{{getDefPhotoPath($DefPhotoList,'light-logo')}}" alt="image" class="footer_logo img-fluid">
                    </a>
                    <p class="clr-neutral-30 mb-6"> {{__('web/footer.text')}}</p>
                    <ul class="list list-row gap-3 footer_social flex-wrap mb-5">
                        @if($WebConfig->facebook)
                            <li>
                                <a href="{{$WebConfig->facebook}}"  target="_blank" class="link d-grid place-content-center w-9 h-9 rounded-circle border clr-neutral-0 :clr-neutral-0">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        @endif

                        @if($WebConfig->twitter)
                            <li>
                                <a href="{{$WebConfig->twitter}}"  target="_blank" class="link d-grid place-content-center w-9 h-9 rounded-circle border clr-neutral-0 :clr-neutral-0">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        @endif

                        @if($WebConfig->youtube)
                            <li>
                                <a href="{{$WebConfig->youtube}}"  target="_blank" class="link d-grid place-content-center w-9 h-9 rounded-circle border clr-neutral-0 :clr-neutral-0">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        @endif

                        @if($WebConfig->instagram)
                            <li>
                                <a href="{{$WebConfig->instagram}}" target="_blank" class="link d-grid place-content-center w-9 h-9 rounded-circle border clr-neutral-0 :clr-neutral-0">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2"></div>
                <div class="col-md-6 col-lg-4 mobile_footer_p mb-5">
                    <p class="mb-6 clr-neutral-30">{!! __('web/footer.news-letter-text') !!}</p>
                    <div class="p-2 rounded-pill border border-neutral-200">
                        <form action="#" class="d-flex align-items-center">
                            <input type="text" placeholder="{{__('web/footer.news-letter-email')}}" class="w-100 border-0 bg-transparent clr-neutral-30 px-3 py-2 ::placeholder-neutral-30 :focus-outline-0">
                            <button type="button" class="d-grid place-content-center px-6 py-3 rounded-pill bg-tertiary-300 clr-neutral-0 border-0">
                                <span class="material-symbols-outlined mat-icon fw-300"> send </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row footer_copy_right">
            <div class="col-12">
                <div class="py-8 border-top">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-12 mobile_footer_p_bottom">
                            <p class="m-0 clr-neutral-0 text-center text-lg-center"> {!! GetCopyRight('2008',$WebConfig->name ) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sticky-navbar fixed d-xl-none">
    <div class="sticky-info">
        <a href="{{route('page_index')}}" class="active_footerX sticky_a ">
            <span class="material-symbols-outlined mat-icon"> home </span>
            {{__('web/stickyBar.home')}}
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="sticky_a ">
            <span class="material-symbols-outlined mat-icon"> home_work  </span>
            {{ __('web/stickyBar.project')}}
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="sticky_a ">
            <span class="material-symbols-outlined mat-icon"> home </span>
            {{ __('web/stickyBar.units') }}
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="sticky_a">
            <span class="material-symbols-outlined mat-icon"> menu </span>
            {{ __('web/stickyBar.menu') }}
        </a>
    </div>
</div>

