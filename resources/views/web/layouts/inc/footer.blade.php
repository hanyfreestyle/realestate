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

@if($pageView['show_fix'] == true)

    <div class="fixDiv d-xl-none">
        <div class="sticky-navbar fixed d-xl-none">

            <div class="sticky-info">
                <a href="{{route('page_index')}}" class="sticky_a @if($pageView['SelMenu'] == 'HomePage') sticky_active @endif " >
                    <span class="material-symbols-outlined mat-icon"> home </span>
                    {{__('web/stickyBar.home')}}
                </a>
            </div>

            <div class="sticky-info">
                <a href="{{route('page_compounds')}}"  href="#" class="sticky_a  @if($pageView['SelMenu'] == 'Compounds') sticky_active @endif ">
                    <span class="material-symbols-outlined mat-icon"> home_work  </span>
                    {{ __('web/stickyBar.project')}}
                </a>
            </div>
            <div class="sticky-info">
                <a  href="{{route('page_for_sale')}}"   class="sticky_a @if($pageView['SelMenu'] == 'ForSale') sticky_active @endif">
                    <span class="material-symbols-outlined mat-icon"> scene </span>
                    {{ __('web/stickyBar.units') }}
                </a>
            </div>

            <div class="sticky-info">
                <a href="#" class="sticky_a  @if($pageView['SelMenu'] == 'SelMenu') sticky_active @endif">
                    <span class="material-symbols-outlined mat-icon"> menu </span>
                    {{ __('web/stickyBar.menu') }}
                </a>
            </div>
        </div>
    </div>

@else
{{--    <div class="sticky_call fixed d-xl-none"> --}}
<div class="fixDiv d-xl-none">
    <div class="sticky_call_new">

        <div class="sticky_info_call">
            <a href="{{route('page_index')}}" class="sticky_a_call sticky_a_phone" >
                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9916 23.1503C11.6689 22.833 10.6491 22.0956 9.6153 21.4101C6.01017 19.0332 3.69298 15.6832 1.9997 11.8505C1.30065 10.2708 0.664128 8.67073 0.483049 6.93276C0.310435 5.23418 0.634775 3.66876 1.67369 2.27625C2.26536 1.48795 3.0591 0.93945 3.94077 0.48877C4.35689 0.284657 4.83308 0.282295 5.28143 0.383865C5.6009 0.469466 5.91109 0.589712 6.23056 0.675314C6.80779 0.792851 7.02597 1.18549 7.10052 1.68817C7.31955 3.21353 7.55633 4.74364 7.73986 6.25949C7.76826 6.50845 7.65304 6.86745 7.47775 7.0247C6.95187 7.49645 6.39513 7.94137 5.7898 8.3547C5.18446 8.76802 5.11183 8.89709 5.30435 9.59846C6.25246 12.8044 8.06148 15.4242 10.8163 17.4248C11.2622 17.7485 11.5424 17.7678 12.0041 17.4646C12.6766 17.0135 13.336 16.5404 13.9777 16.0626C14.5429 15.657 14.8014 15.6149 15.3661 16.0633C16.3365 16.8431 17.28 17.6529 18.2411 18.4674C18.5366 18.7137 18.8544 18.9473 19.0827 19.2313C19.2099 19.3953 19.3047 19.6807 19.276 19.8586C18.9162 21.4145 18.1066 22.59 16.4416 23.0536C15.2806 23.4108 14.1136 23.5066 12.9916 23.1503Z" fill="#1E4164"></path></svg>
                {{ __('web/footer.sticky-but-call')}}
            </a>
        </div>

        <div class="sticky_info_call">
            <a href="{{route('page_index')}}" class="sticky_a_call sticky_a_whatsapp" >
                <svg width="23" height="23" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 28.9956C0.146704 28.4728 0.268957 27.9986 0.403435 27.5244C0.929124 25.6277 1.44259 23.7188 1.9805 21.822C2.0294 21.6396 2.00495 21.4816 1.91937 21.3235C0.892448 19.4876 0.305633 17.53 0.171154 15.4387C-0.122253 11.171 1.22253 7.48694 4.18106 4.41079C6.51609 1.97906 9.38904 0.556491 12.7388 0.118779C18.6558 -0.647218 24.4751 2.34382 27.2869 7.58421C28.3016 9.4688 28.8517 11.4871 28.974 13.6271C29.3774 20.8372 24.2428 27.2813 17.0665 28.5458C13.8635 29.1051 10.8194 28.6309 7.92201 27.1597C7.7264 27.0624 7.55524 27.0381 7.33519 27.0989C5.03683 27.7068 2.73847 28.3026 0.452337 28.8984C0.330084 28.9227 0.195605 28.947 0 28.9956ZM3.45976 25.5791C3.59424 25.5547 3.67982 25.5426 3.75317 25.5183C5.06128 25.1778 6.36939 24.8374 7.6775 24.4969C7.90978 24.4361 8.09316 24.4605 8.30099 24.5942C9.97586 25.6155 11.7852 26.187 13.7413 26.3207C16.1496 26.4788 18.4113 25.9681 20.5019 24.7644C24.7563 22.3327 27.1035 17.603 26.4311 12.7881C26.0399 9.99163 24.8052 7.59637 22.7146 5.6753C19.9395 3.13413 16.6387 2.10064 12.9099 2.58699C10.0492 2.95175 7.6286 4.22841 5.697 6.35618C3.06855 9.26211 2.10275 12.6787 2.73847 16.533C3.00743 18.1379 3.63092 19.597 4.51114 20.9588C4.62117 21.1168 4.64562 21.2749 4.58449 21.4573C4.45002 21.9071 4.32776 22.357 4.20551 22.8069C3.97323 23.7066 3.72872 24.6064 3.45976 25.5791Z" fill="white"></path><path d="M18.3747 21.2864C17.47 21.3107 16.6876 21.0068 15.9052 20.7393C13.1789 19.8152 11.1129 18.0279 9.36464 15.815C8.64335 14.9031 7.95873 13.9669 7.54307 12.8605C7.13964 11.7783 7.07851 10.6962 7.5064 9.60193C7.7509 8.98184 8.16656 8.48333 8.65558 8.03346C8.88786 7.82676 9.19349 7.74165 9.49912 7.72949C9.71918 7.72949 9.93923 7.75381 10.1593 7.75381C10.5505 7.72949 10.7583 7.94835 10.8928 8.26447C11.2962 9.22501 11.7119 10.1855 12.0909 11.1461C12.152 11.3041 12.1398 11.5595 12.0542 11.6932C11.7975 12.0945 11.5163 12.4835 11.1984 12.8605C10.8806 13.2374 10.8561 13.3346 11.1006 13.7602C12.262 15.6934 13.8758 17.0917 15.9908 17.9185C16.3331 18.0522 16.5165 18.0157 16.761 17.7361C17.1155 17.3227 17.4578 16.8971 17.7879 16.4716C18.0813 16.1068 18.2402 16.0339 18.6803 16.2284C19.4383 16.5689 20.1841 16.9336 20.942 17.2984C21.1743 17.4078 21.4188 17.5051 21.6144 17.651C21.7244 17.7361 21.8345 17.9063 21.8467 18.0279C21.8834 19.11 21.5655 20.0219 20.5753 20.6177C19.8906 21.0554 19.1571 21.3229 18.3747 21.2864Z" fill="white"></path></svg>
                {{ __('web/footer.sticky-but-whatsapp') }}
            </a>
        </div>

    </div>
</div>

@endif


