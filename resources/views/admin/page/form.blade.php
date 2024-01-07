@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"  />


    <x-ui-card :page-data="$pageData"  >
        <x-mass.confirm-massage />

        <form  class="mainForm" action="{{route('pages.update',intval($Page->id))}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <x-form-input label="Slug" name="slug" :requiredSpan="true" colrow="col-lg-12 {{getColDir('en')}}"
                              value="{{old('slug',$Page->slug)}}"  dir="en" inputclass="dir_en"/>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>{{__('admin/page.mod_page_links')}}</label>
                        <select class="select2  @error('links') is-invalid @enderror" name="links[]" multiple="multiple" data-placeholder="{{__('admin/page.mod_page_links_placeholder')}}" style="width: 100%;"  data-parsley-required="true" >
                            @foreach($getAllPagesData as $pageDataRow)
                                @if($pageDataRow->id != $Page->id)
                                    <option value="{{$pageDataRow->id}}" {{ in_array($pageDataRow->id,old('links',$Page->links)) ? 'selected' : '' }}  >{{ $pageDataRow->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ \App\Helpers\AdminHelper::error($errors->first('links'),'links',__('admin/page.mod_page_links')) }}</strong>
                            </span>
                    </div>
                </div>
            </div>


{{--            <div class="row">--}}
{{--                <x-form-select-arr name="developer_id" label="{{__('admin/form.developer')}}" :sendvalue="old('developer_id',$Page->developer_id)" :required-span="false" colrow="col-lg-3 " :send-arr="$Developers"/>--}}
{{--                <x-form-select-arr name="category_id" label="{{__('admin/form.category')}}" :sendvalue="old('category_id',$Page->category_id)" :required-span="false" colrow="col-lg-3 " :send-arr="$Categories"/>--}}
{{--                <x-form-select-arr name="location_id" label="{{__('admin/project.loction')}}" :sendvalue="old('location_id',$Page->location_id)" :required-span="false" colrow="col-lg-3 " :send-arr="$Locations"/>--}}
{{--            </div>--}}


            <div class="row">
                @foreach ( config('app.lang_file') as $key=>$lang )
                    <div class="col-lg-6 {{getColDir($key)}}">
                        <x-trans-input
                            label="{{__('admin/form.title_'.$key)}} ({{ $key}})"
                            name="{{ $key }}[name]"
                            dir="{{ $key }}"
                            reqname="{{ $key }}.name"
                            value="{{old($key.'.name',$Page->translateOrNew($key)->name)}}"
                        />
{{--                        <x-trans-text-area--}}
{{--                            label="{{ __('admin/form.content_'.$key)}} ({{ ($key) }})"--}}
{{--                            name="{{ $key }}[des]"--}}
{{--                            dir="{{ $key }}"--}}
{{--                            reqname="{{ $key }}.des"--}}
{{--                            value="{!! old($key.'.des',$Page->translateOrNew($key)->des) !!}"--}}
{{--                        />--}}
                    </div>
                @endforeach
            </div>

{{--            <x-meta-tage-filde :body-h1="false" :breadcrumb="false"  :old-data="$Page" :placeholder="false" />--}}

            <hr>

            <div class="row">
                <x-form-check-active :row="$Page" lable="{{__('admin/form.is_published')}}" name="is_active" page-view="{{$pageData['ViewType']}}"/>
            </div>

            <hr>



            <div class="container-fluid">
                <x-form-submit text="{{$pageData['ViewType']}}" />
            </div>
        </form>

    </x-ui-card>
@endsection


@push('JsCode')
        <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.config.height = 450;
            //  CKEDITOR.config.contentsCss = "https://realestate.eg/css/bootstrap.min.css";
            CKEDITOR.replace('en[des]');
            CKEDITOR.replace('ar[des]', {
                contentsLangDirection: 'rtl',
            });
        </script>

@endpush
