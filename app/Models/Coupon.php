<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'from',
        'to',
        'discount_type',
        'value',
        'status',
        'products',
        'count_used'
    ];

    public function order(){
        return $this->hasOne(Order::class,'coupon_id','id');
    }

    public function product(){
        return $this->belongsToMany(Product::class,'coupon_products','coupon_id','product_id');
    }
}
