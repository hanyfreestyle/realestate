<header class="header header--sticky border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="menu d-lg-flex justify-content-lg-between align-items-lg-center">
                    <div class="menu-mobile-nav d-flex align-items-center justify-content-between py-3 py-lg-0 order-lg-2">

                        <ul class="list list-row gap-4 flex-wrap align-items-center order-1">
                            <li class="d-xl-none">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="header_search">
                                        <form action=""  method="post">
                                            @csrf
                                            <input type="text"  name="project_name" placeholder="{{__('web/topHeader.serach-placeholder')}}" value="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>




                                </div>
                            </li>

                            <li class="d-xl-none">
                                <div class="d-flex align-items-center gap-5">
                                    <a href="tel:{{__('web/topHeader.call-us-now-number')}}">
                                        <div class="w-10 h-10 rounded-circle bg-primary-300 d-grid place-content-center flex-shrink-0">
                                            <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-0 fw-300"> phone_in_talk </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="d-xl-none">
                                <div class="d-flex align-items-center gap-5">
                                    <a href="#">
                                        <div class="w-10 h-10 rounded-circle bg-secondary-300 d-grid place-content-center flex-shrink-0">
                                            <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> <i class="fa-brands fa-whatsapp"></i> </span>
                                        </div>
                                    </a>
                                </div>
                            </li>


                            <li class="lang_menu d-none d-lg-block">
                                    <a href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale()) }}"
                                       class="link d-flex align-items-center gap-2 p-2 rounded-pill bg-primary-5p clr-neutral-500">
                                        <ul class="list list-row list-divider-half-xs align-items-center lh-1">
                                            <li>
                                                <span class="material-symbols-rounded mat-icon"> language </span>
                                            </li>
                                        </ul>
                                    </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="list list-lg-row menu-nav order-lg-1">
                        <li class="menu-list @if($pageView['SelMenu'] == 'HomePage') current-page @endif"><a href="{{route('page_index')}}" class="link menu-link "> {{__('web/menu.home')}} </a> </li>
                        <li class="menu-list @if($pageView['SelMenu'] == 'Compounds') current-page @endif"><a href="{{route('page_compounds')}}" class="link menu-link "> {!! __('web/menu.egypt-s-compounds') !!} </a> </li>
                        <li class="menu-list @if($pageView['SelMenu'] == 'Blog') current-page @endif"><a href="{{route('page_blog')}}" class="link menu-link "> {{__('web/menu.blog')}} </a> </li>
                        <li class="menu-list @if($pageView['SelMenu'] == 'ForSale') current-page @endif"><a href="{{route('page_for_sale')}}" class="link menu-link "> {{__('web/menu.properties-for-sale')}} </a> </li>
                        <li class="menu-list @if($pageView['SelMenu'] == 'Developers') current-page @endif"><a href="{{route('page_developers')}}" class="link menu-link ">{{__('web/menu.developer')}}  </a> </li>
                        <li class="menu-list @if($pageView['SelMenu'] == 'Contact') current-page @endif"><a href="{{route('page_index')}}" class="link menu-link "> {{__('web/menu.contatc-us')}} </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
