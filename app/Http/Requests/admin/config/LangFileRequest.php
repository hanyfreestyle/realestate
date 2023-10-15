<?php


namespace App\Http\Requests\admin\config;
use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LangFileRequest extends FormRequest
{



    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {




//        $index = 0;
//        foreach ($request->key as $keyfromrequest ){
//
//            dd($request->merge(['key'[$index] => AdminHelper::Url_Slug($request['key'][$index])]));
//
//            $request->merge(['key'[$index] => AdminHelper::Url_Slug($request['key'][$index])]);
//            $index++ ;
//        }

        $rules =[


        ];


        return $rules;
    }
}
