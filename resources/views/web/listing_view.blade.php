@extends('web.layouts.app')
@section('content')

    @if($unit->slider_count > 2)
        <x-main-block.units-slider :unit="$unit" />
    @elseif(count($old_slider) > 0 )
        <x-main-block.units-slider-folder :photos="$old_slider" :unit="$unit"   />
    @endif



    <div class="bg-primary-5p">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="section-space--sm">

                        @if($unit->listing_type == 'Project')
                            <x-def-blocks.project-info :row="$unit"  />
                        @endif

                        <x-blocks.project-units :row="$unit" />

                        <x-blocks.description  :row="$unit" title="{{$description}}">
                            <x-web.block-breadcrumbs>
                                {{ Breadcrumbs::render('developer_list') }}
                            </x-web.block-breadcrumbs>
                        </x-blocks.description>

                        <x-def-blocks.amenities :senddata="$amenities" title="{{__('web/blog.h2-amenities')}}" />

                        <x-def-blocks.youtube :vcode="$youtube" title="{{__('web/blog.h2-video')}}" />

                        <x-def-blocks.google-map :row="$unit" title="{{ __('web/compound.listview-h2-map') }}" />

                        <x-def-blocks.faq :row="$unit"  title="{{__('web/compound.listview-h2-faq')}}"/>

                    </div>

                </div>
                <div class="col-xl-4 mobile_stop">
                    <div class="section-space--sm">
{{--                        <x-main-block.search-form-right />--}}
                    </div>
                </div>
            </div>
        </div>




    </div>



@endsection
