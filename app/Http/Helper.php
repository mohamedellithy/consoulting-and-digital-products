<?php
use App\Models\Setting;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
if(!function_exists('upload_assets')){
    function upload_assets($image_selected,$is_id = false,$default = 'default.jpg'){
        if($is_id == true):
            $image_selected = Image::find($image_selected);
        endif;

        if($image_selected):
            $value = isset($image_selected->path) ? 'storage/'.$image_selected->path : $default;
        else:
            $value = $default;
        endif;

        return  asset($value);
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


if(!function_exists('TrimLongText')){
    function TrimLongText($text,$length = 100){
        $text = trim(strip_tags($text));
        return mb_substr($text,0,$length).' ... ';
    }
}

if(!function_exists('GetAttachments')) {
    function GetAttachments($attachments_id)
    {
        $media_ids = explode(',', $attachments_id);
        $attachments = Image::whereIn('id', $media_ids)->get();
        return $attachments;
    }
}

if(!function_exists('formate_price')) {
    function formate_price($price)
    {
        return round($price,2).' '.get_settings('website_currency');
    }
}


if(!function_exists('filter_orders')) {
    function filter_orders($orders)
    {
        $orders->when(request('order_status') != null, function ($q) {
            return $q->where('order_status', request('order_status'));
        });

        $orders->when(request('search') != null, function ($q) {
            return $q->where('order_no', 'like', '%' . request('search') . '%')->orWhereHas('customer', function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            });
        });

        $orders->when(request('filter') == 'sort_asc', function ($q) {
            return $q->orderBy('created_at', 'asc');
        });

        $orders->when(request('filter') == 'sort_desc', function ($q) {
            return $q->orderBy('created_at', 'desc');
        });

        return $orders;
    }
}


if(!function_exists('filter_payments')) {
    function filter_payments($payments)
    {
        $payments->when(request('status_payment') != null, function ($q) {
            return $q->where('status_payment', request('status_payment'));
        });

        $payments->when(request('search') != null, function ($q) {
            return $q->orWhereHas('order', function ($query) {
                $query->where('order_no', 'like', '%' . request('search') . '%');
            })->orWhereHas('order.customer', function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            });
        });

        $payments->when(request('filter') == 'sort_asc', function ($q) {
            return $q->orderBy('created_at', 'asc');
        });

        $payments->when(request('filter') == 'sort_desc', function ($q) {
            return $q->orderBy('created_at', 'desc');
        });

        return $payments;
    }
}


if(!function_exists('IsPagesAllowDeletes')){
    function IsPagesAllowDeletes($page){
        if(!isset($page)) return false;

        if(!in_array($page,[
            '/',
            'shop',
            'services',
            'contact-us'
        ])):
            return true;
        endif;

        return false;
    }
}

if(!function_exists('IsNotAllowPagesChangeSlug')){
    function IsNotAllowPagesChangeSlug($page){
        if(!isset($page)) return false;

        if(!in_array($page,[
            '/',
            'shop',
            'services',
            'contact-us'
        ])):
            return true;
        endif;

        return false;
    }
}

if(!function_exists('platformSettings')){
    function platformSettings($option = null,$whereCondition = []){
        if(!isset($setting)):
            $setting = Setting::query();
            if(count($whereCondition) > 0 ):
                $setting = $setting->where($whereCondition);
            endif;
            $setting = $setting->pluck('value','name')->toArray();
        endif;

        if(isset($option)) return $setting[$option];

        return $setting;
    }
}

if(!function_exists('ActivePagesMenus')){
    function ActivePagesMenus($whereCondition = []){

        $pages = Cache::rememberForever('all-pages',function(){
            $pages = Page::where('status','active')->get();
            return $pages;
        });

        if(count($whereCondition) > 0):
            list($column,$condition,$value) = $whereCondition;
            return array_values(collect($pages)->where($column,$condition,$value)->all());
        endif;

        return $pages;
    }
}


if(!function_exists('get_settings')){
    function get_settings($key = null){
        $settings = Cache::rememberForever('all-settings',function(){
            return Setting::all();
        });

        if($key == null):
            $settings = collect($settings)->pluck('value','name')->toArray();
            return $settings;
        else:
            $setting  =  collect($settings)->where('name','=',$key)->first();
            return $setting ? $setting->value : null;
        endif;
    }
}

if(!function_exists('ImageInfo')){
    function ImageInfo($image_id = null){
        if(!isset($image_id)) return null;

        $image = Image::find($image_id);
        return $image;
    }
}

if(!function_exists('fetchImageInnerDetails')){
    function fetchImageInnerDetails($image){
        if(!isset($image)) return '-';

        $image  = explode('/',$image->path);
        return $image[count($image) - 1];
    }
}

if(!function_exists('getOriginalSizeWithOriginalUnit')){
    function getOriginalSizeWithOriginalUnit($bytes){
        if($bytes > 0) {
            $i = floor(log($bytes) / log(1024));
            $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            return sprintf('%.02F', round($bytes / pow(1024, $i),1)) * 1 . ' ' . @$sizes[$i];
        } else {
            return '0 B';
        }
    }
}




if(!function_exists('formateMediaType')){
    function formateMediaType($type){
        if(!isset($type)) return 'image';

        return explode('/',$type);
    }
}

