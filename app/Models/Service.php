<?php

namespace App\Models;

use App\Models\Image;
use App\Services\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'whatsapStatus',
        'whatsapNumber',
        'loginStatus',
        'meta_title',
        'meta_description',
    ];
    
    public function image_info()
    {
        return $this->belongsTo(Image::class, 'image', 'id');
    }
    // public function setImageAttribute($image)
    // {
    //     // dd($image);
    //     $upload = new UploadImage();
    //     $image = $upload->upload($image);
    //     $this->attributes['image'] = $image->id;
    // }

    // public function getImageAttribute($image)
    // {
    //     // $image = Image::find($image)->path;
    //     // //  dd($image);
    //     // if (is_null($image)) {
    //     //     return asset('storage/images/services/man.jpg');
    //     // }
    //     // return asset('storage') . '/' . $image;
    // }

}
