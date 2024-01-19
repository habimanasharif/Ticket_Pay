<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    protected $table = 'appeal';
    use HasFactory;
    protected $fillable = [
        'userId',
        'ticketId',
        'offence',
        'reason',
    ];
}
