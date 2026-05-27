<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LicensePurchase extends Model
{
    protected $fillable = [
        'email',
        'license_key',
        'stripe_session_id',
        'stripe_payment_intent',
        'status',
        'amount_cents',
        'version',
    ];

    protected function casts(): array
    {
        return [
            'amount_cents' => 'integer',
        ];
    }
}
