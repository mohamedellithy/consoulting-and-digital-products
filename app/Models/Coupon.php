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

    public function user(){
        return $this->belongsToMany(User::class,'users_coupons','coupon_id','user_id')->withPivot('product_id','order_id');
    }
}
