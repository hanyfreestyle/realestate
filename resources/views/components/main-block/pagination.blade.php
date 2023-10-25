<div class="container section-space--sm">
    <div class="d-flex justify-content-center">
        @if($row instanceof \Illuminate\Pagination\AbstractPaginator)
            {{ $row->links('web.layouts.inc.pagination') }}
        @endif
    </div>
</div>
