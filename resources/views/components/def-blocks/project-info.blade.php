<div class="p-6 bg-neutral-0 rounded-4 mb-10 ProjectViewInfo">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="py-2 px-5 bg-primary-50 rounded-pill pro_type">
            <span class="clr-primary-300 d-inline-block mb-0 ">  {{ getProjectTypeName($row->project_type)}} </span>
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
    <h1 class="mt-4">{{$row->name}}</h1>

    <div class="hr-dashed"></div>


    <div class="row mt-5">

        <div class="col-lg-4 mb-4">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> payments </span>
                <p class="mb-0 pro_info">
                  {{ __('web/def.start-from') }} <span class="price"> {{number_format($row->price)}} </span>
                </p>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> distance </span>
                <p class="mb-0 crop_line_1 pro_info">
                    <a href="{{route('page_locationView',$row->locationName->slug)}}">
                        {{$row->locationName->name}}
                    </a>
                </p>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined mat-icon iconColor"> construction </span>
                <p class="mb-0 crop_line_1 pro_info">
                    <a href="{{route('page_developer_view',$row->developerName->slug)}}">
                        {{$row->developerName->name}}
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
