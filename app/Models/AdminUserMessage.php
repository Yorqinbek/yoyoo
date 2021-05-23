<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUserMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'shart_id', 'message','answer','view'
    ];
}
