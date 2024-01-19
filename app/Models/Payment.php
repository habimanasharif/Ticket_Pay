<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    use HasFactory;
    protected $fillable = [
        'userId',
        'ticketId',
        'amount',
        'status',
    ];
}
