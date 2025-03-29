<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'amount',
        'payment_date',
        'payment_method',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

}
