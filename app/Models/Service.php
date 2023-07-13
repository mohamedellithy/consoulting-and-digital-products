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
    ];
    public function image()
    {
        return $this->belongsTo(Image::class, 'id', 'image');
    }
    public function setImageAttribute($image)
    {
        $upload = new UploadImage();
        $image = $upload->upload($image);
        $this->attributes['image'] = $image->id;
    }

    public function getImageAttribute($image)
    {
        $image = Image::find($image)->path;
        //  dd($image);
        if (is_null($image)) {
            return asset('storage/images/services/man.jpg');
        }
        return asset('storage') . '/' . $image;
    }

}
