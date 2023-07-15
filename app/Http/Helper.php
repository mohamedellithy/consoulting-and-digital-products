<?php 

if(!function_exists('upload_assets')){
    function upload_assets($image){  
        if($image):
            $value = isset($image->path) ? $image->path : 'default.jpg';
        else:
            $value = 'default.jpg';
        endif;

        return  asset('storage/'.$value);
    }
}


if(!function_exists('IsActiveOnlyIf')){
    function IsActiveOnlyIf($routes = []){
        if(count($routes) == 0) return '';

        $current_route = \Route::currentRouteName();
        
        if(in_array($current_route,$routes)):
            return 'active open';
        endif;

        return '';
    }
}
