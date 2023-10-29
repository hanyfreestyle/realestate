@extends('web.layouts.app')
@section('content')
    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('LocationView',$trees) }}
    </x-web.block-breadcrumbs>

    <div class="bg-primary-5p def_pb_100">
        <div class="container">
            <div class="row developer_view mb-5">

                <div class="col-md-12 text-center ">
                    <h1 class="def_h1 text-center mt-3">
                      {{ getLocationProjectTypeName($location->projects_type) ." ". $location->name}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8 ListProjectUnitsCard">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if(!isset($_GET['property_page'])) active @endif() "
                                    id="pills-project-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-project"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-project"> {{$projects->total()}} {{__('web/compound.nav-compounds') }}  </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if(isset($_GET['property_page'])) active @endif()"
                                    id="pills-units-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-units"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-units">{{$units->total()}} {{ __('web/compound.nav-properties') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade @if(!isset($_GET['property_page'])) show active @endif() " id="pills-project" role="tabpanel" aria-labelledby="pills-project-tab">
                            <div class="row g-4 pb-5">
                                @foreach($projects as $project)
                                    <x-main-block.project-card :project="$project" />
                                @endforeach
                            </div>
                            <x-main-block.pagination :row="$projects"/>
                        </div>

                        <div class="tab-pane fade @if(isset($_GET['property_page'])) show active @endif() " id="pills-units" role="tabpanel" aria-labelledby="pills-units-tab">
                            <div class="row">
                                @foreach($units as $unit)
                                    <x-main-block.units-card :unit="$unit" />
                                @endforeach
                            </div>
                            <x-main-block.pagination :row="$units"/>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <x-main-block.search-form-right />

                </div>

            </div>
        </div>


    </div>
@endsection
