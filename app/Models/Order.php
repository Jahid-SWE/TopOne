<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','email','phone','address','payment_status','transaction_id','currency','order_total',
        'order_date','payment_type','customer_id','shipping_id',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
