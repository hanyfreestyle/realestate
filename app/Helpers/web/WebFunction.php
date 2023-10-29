<?php
use App\Http\Controllers\WebMainController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    defWebAssets
if (!function_exists('defWebAssets')) {
    function defWebAssets($path, $secure = null): string
    {
        return app('url')->asset('assets/web/' . $path, $secure);
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webContainer
if (!function_exists('webContainer')) {
    function webContainer($type=1) :string
    {
        if($type == 1){
            $webContainer = 'custom-container';
        }else{
            $webContainer = 'container';
        }
        return  $webContainer;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webChangeLocale
if (!function_exists('webChangeLocale')) {
    function webChangeLocale(){
        $Current =  LaravelLocalization::getCurrentLocale() ;
        if($Current == 'ar'){
            $change = 'en';
        }else{
            $change = 'ar';
        }
        return $change;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webChangeLocaletext
if (!function_exists('webChangeLocaletext')) {
    function webChangeLocaletext(){
        $Current =  LaravelLocalization::getCurrentLocale() ;
        if($Current == 'ar'){
            $change = 'English';
        }else{
            $change = 'عربى';
        }
        return $change;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getPhotoPath
if (!function_exists('getPhotoPath')) {
    function getPhotoPath($file,$defPhoto="dark-logo",$defPhotoThum="photo"){
        $defPhoto_file = WebMainController::getDefPhotoById($defPhoto);
        if($file){
            $sendImg = defImagesDir($file);
        }else{
            $sendImg = defImagesDir($defPhoto_file->$defPhotoThum ?? '');
        }
        return $sendImg ;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    getDefPhotoPath
if (!function_exists('getDefPhotoPath')) {
    function getDefPhotoPath($DefPhotoList,$cat_id){
        if ($DefPhotoList->has($cat_id)) {
            $file =  $DefPhotoList[$cat_id]['photo'] ;
            $sendImg = defImagesDir($file);

        }else{
              $sendImg = "ddddd"  ;
        }


        return $sendImg ;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     GetCopyRight
if (!function_exists('GetCopyRight')) {
    function GetCopyRight($StartDate,$CompanyName) {
        if($StartDate > date("Y")) {
            $StartDate = date("Y");
        }
        $Lang =  LaravelLocalization::getCurrentLocale() ;
        switch($Lang) {
            case 'ar':
                $copyname = "جميع الحقوق محفوظة";
                if($StartDate == date("Y")) {
                    $CopyRight = $copyname." &copy; ".date("Y").' <span class="clr-tertiary-300">'.$CompanyName.'</span>';
                } else {
                    $CopyRight = $copyname." &copy; ".$StartDate." - ".date("Y").' <span class="clr-tertiary-300">'
                        .$CompanyName.'</span>';
                }
                break;

            default:
                $copyname = "All Rights Reserved";
                if($StartDate == date("Y")) {
                    $CopyRight = $copyname." &copy; ".date("Y").' <span class="clr-tertiary-300">'.$CompanyName.'</span>';
                } else {
                    $CopyRight = $copyname." &copy; ".$StartDate." - ".date("Y").' <span class="clr-tertiary-300">'
                        .$CompanyName.'</span>';
                }
        }
        return $CopyRight;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ChangeText
if (!function_exists('ChangeText')) {
    function ChangeText($value) {
        $WebConfig = WebMainController::getWebConfig();
        $CompanyName = '<span>'.$WebConfig->name.'</span>';
        $rep1 = array("[CompanyName]","[WebSiteName]");
        $rep2 = array($CompanyName,$WebConfig->def_url);
        $value = str_replace($rep1,$rep2,$value);
        return $value;
    }
}


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getLocationProjectTypeName
if (!function_exists('getLocationProjectTypeName')) {
    function getLocationProjectTypeName($value) {
        switch ($value) {
            case 'compound':
                $sendStyle = __('web/var.location-compound');
                break;
            case 'village':
                $sendStyle = __('web/var.location-village');
                break;
            case 'resort':
                $sendStyle = __('web/var.location-resort');
                break;
            default:
                $sendStyle = "";
        }
        return $sendStyle;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getProjectStatus
if (!function_exists('getProjectStatus')) {
    function getProjectStatus($value) {
        switch ($value) {
            case 'under-construction':
                $sendStyle =__('web/var.status-under-construction');
                break;
            case 'completed':
                $sendStyle = __('web/var.status-completed');
                break;
            default:
                $sendStyle = "";
        }
        return $sendStyle;
    }
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getProjectTypeName
if (!function_exists('getProjectTypeName')) {
    function getProjectTypeName($value) {
        switch ($value) {
            case 'residential':
                $sendStyle = __('web/var.project-residential');
                break;
            case 'vacation':
                $sendStyle = __('web/var.project-vacation');
                break;
            case 'commercial':
                $sendStyle = __('web/var.project-commercial');
                break;
            case 'medical':
                $sendStyle =__('web/var.project-medical');
                break;

            default:
                $sendStyle = "";
        }
        return $sendStyle;
    }
}


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getPropertyTypeName
if (!function_exists('getPropertyTypeName')) {
    function getPropertyTypeName($value) {
        switch ($value) {
            case 'apartment':
                $sendStyle = __('web/var.units-apartment') ;
                break;
            case 'duplex':
                $sendStyle = __('web/var.units-duplex') ;
                break;
            case 'studio':
                $sendStyle = __('web/var.units-studio') ;
                break;
            case 'town-house':
                $sendStyle = __('web/var.units-town-house') ;
                break;
            case 'twin-house':
                $sendStyle = __('web/var.units-twin-house') ;
                break;
            case 'pent-house':
                $sendStyle = __('web/var.units-pent-house') ;
                break;
            case 'villa':
                $sendStyle = __('web/var.units-villa') ;
                break;
            case 'office':
                $sendStyle = __('web/var.units-office') ;
                break;
            case 'store':
                $sendStyle = __('web/var.units-store') ;
                break;
            case 'chalet':
                $sendStyle = __('web/var.units-chalet') ;
                break;
            case 'chalet-with-garden':
                $sendStyle = __('web/var.units-chalet-with-garden') ;
                break;
            case 'pharmacy':
                $sendStyle = __('web/var.units-pharmacy') ;
                break;
            case 'clinic':
                $sendStyle = __('web/var.units-clinic') ;
                break;
            case 'laboratory':
                $sendStyle = __('web/var.units-laboratory') ;
                break;

            default:
                $sendStyle = "";
        }
        return $sendStyle;
    }
}


