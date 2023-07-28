<?php

namespace App\Models;

use App\Models\Image;
use App\Services\UploadImage;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'slug'
    ];

    public function slug(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => str_replace(' ','-',$value ?: $this->name),
        );
    }
    
    public function image_info()
    {
        return $this->belongsTo(Image::class, 'image', 'id');
    }

    public function application_order(){
        return $this->hasMany(ApplicationOrder::class,'service_id','id');
    }
}
