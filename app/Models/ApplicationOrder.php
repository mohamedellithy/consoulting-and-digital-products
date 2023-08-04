<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'service_id',
        'name',
        'email',
        'phone',
        'subscriber_notic'
    ];

    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
