@extends('admin.layouts.app')
@php
    $viewDataTable = \App\Helpers\AdminHelper::arrIsset($modelSettings,'location_datatable',0) ;
    if($viewDataTable){
        $tableHeader = ' id="MainDataTable" class="table table-bordered table-hover" ';
    }else{
        $tableHeader = ' class="table table-hover" ';
    }
@endphp

@section('StyleFile')
    @if($viewDataTable)
        <x-data-table-plugins :style="true"/>
    @endif

@endsection

@section('content')



    <x-breadcrumb-def :pageData="$pageData"/>
    <section class="div_data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <x-ui-card  :page-data="$pageData" >
                        <x-mass.confirm-massage/>

                        @if(count($locations)>0)
                            <div class="card-body table-responsive p-0">
                                <table {!! $tableHeader !!} >
                                    <thead>
                                    <tr>
                                        <th class="TD_20">#</th>
                                        <th>{{__('admin/def.form_name_ar')}}</th>
                                        <th>{{__('admin/def.form_name_en')}}</th>
                                        <th>Parent</th>

                                        @if($pageData['ViewType'] == 'deleteList')
                                            <th>{{ __('admin/page.del_date') }}</th>
                                            <th></th>
                                            <th></th>
                                        @else
                                            {{-- <th>{{__('admin/def.status')}}</th>--}}
                                            <th>{{__('admin/def.photo')}}</th>
                                            @can('location_edit')
                                                <th class="tbutaction"></th>
                                            @endcan
                                            @can('location_delete')
                                                <th class="tbutaction"></th>
                                            @endcan
                                        @endif

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($locations as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->translate('ar')->name}}</td>
                                            <td>{{$row->translate('en')->name}}</td>
                                            <th>
                                                @if($row->parent_id )
                                                    {{ $row->parentName->translate('en')->name }}
                                                @endif
                                            </th>
                                            @if($pageData['ViewType'] == 'deleteList')
                                                <td>{{$row->deleted_at}}</td>
                                                <td class="tc"><x-action-button url="{{route('location.restore',$row->id)}}" type="restor" /></td>
                                                <td class="tc"><x-action-button url="#" id="{{route('location.force',$row->id)}}" type="deleteSweet"/></td>
                                            @else
                                                {{-- <td class="tc" > <x-ajax-update-status-but :row="$row" role="location_edit" /> </td>--}}
                                                <td class="tc">{!! \App\Helpers\AdminHelper::printTableImage($row,'photo') !!} </td>
                                                @can('location_edit')
                                                    <td class="tc"><x-action-button url="{{route('location.edit',$row->id)}}" type="edit" :tip="false" /></td>
                                                @endcan
                                                @can('location_delete')
                                                    <td class="tc"><x-action-button url="#" id="{{route('location.destroy',$row->id)}}" type="deleteSweet"/></td>
                                                @endcan
                                            @endif

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <x-alert-massage type="nodata" />
                        @endif
                    </x-ui-card>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            @if($locations instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $locations->links() }}
            @endif

        </div>


    </section>
@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <x-ajax-update-status-js-code url="{{ route('location.updateStatus') }}"/>
    @if($viewDataTable)
        <x-data-table-plugins :jscode="true" />
    @endif


@endpush

