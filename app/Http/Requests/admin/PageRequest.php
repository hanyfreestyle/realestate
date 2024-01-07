<?php

namespace App\Http\Requests\admin;

use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(){

    }


    public function rules(Request $request): array
    {


        $rules = [

           // 'links' => "required|array|min:3",
        ];

        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".name"] =   'required';
//            $rules[$key.".g_title"] =   'required';
//            $rules[$key.".g_des"] =   'required';
//            $rules[$key.".des"] =   'required';
        }

        return $rules;
    }
}
