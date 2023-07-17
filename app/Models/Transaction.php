<?php

namespace App\Models;

use App\Enums\TransEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'transaction_type' => TransEnums::class,
    ];
}
