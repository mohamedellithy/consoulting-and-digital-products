<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail_id',
        'status','slug',
        'attachments_id',
        'meta_title',
        'meta_description'];

    public function slug(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => str_replace(' ','-',$value ?: $this->name),
        );
    }

    public function image_info()
    {
        return $this->belongsTo(Image::class, 'thumbnail_id', 'id');
    }
}
