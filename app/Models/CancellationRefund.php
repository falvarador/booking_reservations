<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancellationRefund extends Model
{
    /** @use HasFactory<\Database\Factories\CancellationRefundFactory> */
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'cancellation_date',
        'refund_amount',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

}
