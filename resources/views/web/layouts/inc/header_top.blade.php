<img src="{{ defWebAssets('img/primary-hero-el-1.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-1">
<img src="{{ defWebAssets('img/primary-hero-el-2.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-2">

<div class="border-bottom header-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list list-row flex-wrap gap-3 align-items-center justify-content-between">
                    <li class="d-none d-lg-block">
                        <a href="{{route('page_index')}}" class="link d-inline-block">
                            <img src="{{getDefPhotoPath($DefPhotoList,'dark-logo')}}" alt="logo" class="top_header_logo d-none d-xl-inline-block">
                        </a>
                    </li>
                    <li class="ShowInDeskX">
                        <ul class="list list-row flex-wrap align-items-center list-dividers list_divider_2 ">

                            <div class="menulogo d-xl-none">
                                <img src="{{getDefPhotoPath($DefPhotoList,'dark-logo')}}" alt="logo" class="mobile_logo">
                            </div>
                            <li class="lang_menu d-xl-none">
                                <div class="dropdown">
                                    <a href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale()) }}"
                                       class="link d-flex align-items-center gap-2 p-2 rounded-pill bg-primary-5p clr-neutral-500">
                                        <ul class="list list-row list-divider-half-xs align-items-center lh-1">
                                            <li>
                                                <span class="material-symbols-rounded mat-icon"> language </span>
                                            </li>

                                        </ul>
                                    </a>
                                </div>
                            </li>
                            <li class="d-none d-lg-block descMenu">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-primary-300 d-grid place-content-center flex-shrink-0">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-0 fw-300"> phone_in_talk </span>
                                    </div>
                                    <div class="d-noneX d-lg-block">
                                        <span class="text_span d-block">{{__('web/topHeader.call-us-now')}}</span>
                                        <a href="tel:406-555-0120" class="text_link d-block clr-neutral-700 :clr-primary-300">{{__('web/topHeader.call-us-now-number')}}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-lg-block descMenu">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-secondary-300 d-grid place-content-center flex-shrink-0">
                                        <span class=" material-symbols-outlined mat-icon fs-24 clr-neutral-700
                                        fw-300"> <i class="fa-brands fa-whatsapp"></i> </span>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <span class="text_span d-block">{{__('web/topHeader.whats-app')}} </span>
                                        <a href="#" class="text_link link d-block clr-neutral-700 :clr-primary-300">
                                            {{__('web/topHeader.whats-app-number')}}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-lg-block descMenu">
                                <div class="d-flex d-inline-block   align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-tertiary-300 d-grid place-content-center flex-shrink-0">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> mark_as_unread </span>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <span class="text_span d-block">{{__('web/topHeader.contact-us')}}</span>
                                        <span class="d-block text_link">{{__('web/topHeader.contact-us-email')}}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

