<header class="header header--sticky border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="menu d-lg-flex justify-content-lg-between align-items-lg-center">
                    <div class="menu-mobile-nav d-flex align-items-center justify-content-between py-3 py-lg-0 order-lg-2">

                        <ul class="list list-row gap-4 flex-wrap align-items-center order-1">
                            <li class="d-xl-none">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-primary-300 d-grid place-content-center flex-shrink-0">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-0 fw-300"> phone_in_talk </span>
                                    </div>
                                    <div class="d-noneX d-lg-block">
                                        <span class="fs-12 d-block"> Call Us Now </span>
                                        <a href="tel:406-555-0120" class="link d-block clr-neutral-700
                                        :clr-primary-300">  0100-9808-986</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-xl-none">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-secondary-300 d-grid place-content-center flex-shrink-0">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> <i class="fa-brands fa-whatsapp"></i> </span>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <span class="fs-12 d-block"> Online Support </span>
                                        <a href="mailto:mail@example.com" class="link d-block clr-neutral-700 :clr-primary-300"> mail@example.com </a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-xl-none">
                                <div class="d-flex d-inline-block   align-items-center gap-5">
                                    <div class="w-10 h-10 rounded-circle bg-tertiary-300 d-grid place-content-center flex-shrink-0">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> mark_as_unread </span>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <span class="fs-12 d-block"> Online Location </span>
                                        <span class="d-block"> 3605 Parker Rd. </span>
                                    </div>
                                </div>
                            </li>
                            <li class="lang_menu d-none d-lg-block">
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
                        </ul>
                    </div>
                    <ul class="list list-lg-row menu-nav order-lg-1">
                        <li class="menu-list current-page"><a href="index.php" class="link menu-link "> Home </a> </li>
                        <li class="menu-list"><a href="Project.php" class="link menu-link "> Egypt's Compounds </a> </li>
                        <li class="menu-list"><a href="Blog.php" class="link menu-link "> Blog </a> </li>
                        <li class="menu-list"><a href="List.php" class="link menu-link "> Properties for sale </a> </li>
                        <li class="menu-list"><a href="Developers.php" class="link menu-link "> Developers </a> </li>
                        <li class="menu-list"><a href="Compounds.php" class="link menu-link "> Contact Us </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
