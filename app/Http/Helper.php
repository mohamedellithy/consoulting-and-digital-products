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

