<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'booking_trx_id',
        'user_id',
        'pricing_id',
        'sub_total_amount',
        'grand_total_amount',
        'is_paid',
        'payment_type',
        'proof',
        'started_at',
        'ended_at'
    ];

    protected $cast = [
        'started_at' => 'date',
        'ended_at' => 'date'
    ];


    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pricing(): BelongsTo {
        return $this->belongsTo(Pricing::class, 'pricing_id');
    }

    
}