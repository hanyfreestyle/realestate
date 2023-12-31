@extends('web.layouts.app')
@section('content')
    <x-web.block-breadcrumbs>
        {{ Breadcrumbs::render('ForSale') }}
    </x-web.block-breadcrumbs>


    <div class="bg-primary-5p def_pb_100">
        <div class="container">
            <div class="row developer_view mb-5">

                <div class="col-md-12 text-centerX ">
                    <h1 class="h1_def h1_def_en text-centerX mt-3">
                        {!! __('web/compound.breadcrumbs-for-sale') !!} -
                        {{$units->total()}} {{ __('web/compound.h1-properties') }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 ListProjectUnitsCard">
                    <div class="row">
                        @foreach($units as $unit)
{{--                            <x-main-block.units-card :unit="$unit" />--}}
                            <x-blocks.units-card-list  :unit="$unit" :showmore="false"/>
                        @endforeach
                    </div>
                    <x-main-block.pagination :row="$units"/>
                </div>
                <div class="col-md-4">
                    <x-main-block.search-form-right />
                </div>
            </div>
        </div>


    </div>
@endsection
