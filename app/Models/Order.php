<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_status','order_no'];

    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }

    // public function product(){
    //     return $this->hasOneThrough(Product::class, OrderItem::class,'order_id','product_id');
    //     //return $this->belongsTo(Product::class,'product_id','id');
    // }

    public function order_items(){
        return $this->hasOne(OrderItem::class,'order_id','id');
    }

    public function payment(){
        return $this->hasOne(Payment::class,'order_id','id');
    }
}
