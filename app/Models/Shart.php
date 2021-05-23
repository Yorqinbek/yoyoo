<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shart extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'user_submit','yo','type','tip_name','user_check'
    ];

}
