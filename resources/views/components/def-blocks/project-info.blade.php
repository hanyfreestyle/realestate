<div class="p-6 bg-neutral-0 rounded-4 mb-10">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="py-3 px-6 bg-primary-50 rounded-pill">
            <h5 class="clr-primary-300 d-inline-block mb-0">  {{ getProjectTypeName($row->project_type)}} </h5>
        </div>
        <ul class="list list-row gap-3 align-items-center">
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <span class="material-symbols-outlined mat-icon fs-20"> favorite </span>
                </a>
            </li>
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <span class="material-symbols-outlined mat-icon fs-20"> compare_arrows </span>
                </a>
            </li>
            <li>
                <a href="#" class="link w-8 h-8 d-grid place-content-center bg-primary-50 clr-primary-300 rounded-circle :bg-primary-300 :clr-neutral-0">
                    <span class="material-symbols-outlined mat-icon fs-20"> Share </span>
                </a>
            </li>
        </ul>
    </div>
    <h1 class="mt-4 project_def_h1">
        {{$row->name}}
    </h1>
    <div class="hr-dashed"></div>


    <div class="row mt-5" >

        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> payments </span>
                <p class="mb-0">
                    <a href="#">
                        {{ __('web/def.start-from') }} <span class="price"> {{number_format($row->price)}} </span>
                    </a>
                </p>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> distance </span>
                <p class="mb-0 crop_line_1">
                    <a href="{{route('page_locationView',$row->locationName->slug)}}">
                        {{$row->locationName->name}}
                    </a>
                </p>
            </div>
        </div>


        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> construction </span>
                <p class="mb-0 crop_line_1">
                    <a class="" href="{{route('page_developer_view',$row->developerName->slug)}}">
                        {{$row->developerName->name}}
                    </a>
                </p>
            </div>
        </div>

    </div>
</div>
