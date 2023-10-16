@if ($paginator->hasPages())
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <nav>
                    <ul class="pagination gap-3 justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
{{--                            <li class="disabled"><span>«</span></li>--}}
                        @else
                            <li class="page-item">
                                <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                                    @if(app()->getLocale() == 'ar')
                                        <i class="fa fa-angles-right"></i>
                                    @else
                                        <i class="fa fa-angles-left"></i>
                                    @endif
                                </a>
                            </li>
                        @endif

                        @if($paginator->currentPage() > 2)
                            <li class="page-item hidden-xs"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="{{ $paginator->url(1) }}">1</a></li>
                        @endif
                        @if($paginator->currentPage() > 3)
                            <li class="page-item"><span class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" >...</span></li>
                        @endif
                        @foreach(range(1, $paginator->lastPage()) as $i)
                            @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                                @if ($i == $paginator->currentPage())
                                    <li class="page-item"><span class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300 :clr-neutral-0 active-bg">{{ $i }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endif
                        @endforeach
                        @if($paginator->currentPage() < $paginator->lastPage() - 2)
                            <li class="page-item"><span class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300">...</span></li>
                        @endif
                        @if($paginator->currentPage() < $paginator->lastPage() - 1)
                            <li class="page-item hidden-xs"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="page-item">
                                <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="{{ $paginator->nextPageUrl() }}" rel="next">
                                    @if(app()->getLocale() == 'ar')
                                        <i class="fa fa-angles-left"></i>
                                    @else
                                        <i class="fa fa-angles-right"></i>
                                    @endif

                                </a>
                            </li>
                        @else
{{--                            <li class="disabled"><span>»</span></li>--}}
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif
