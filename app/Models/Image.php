<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'meta_title',
        'meta_description'
    ];

    public function service()
    {
        return $this->hasMany(Service::class,'id','image');
    }
}
