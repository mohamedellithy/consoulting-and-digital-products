<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'customer_id',
        'product_id',
        'degree',
        'review',
        'status',
        'replay_on'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }


}
