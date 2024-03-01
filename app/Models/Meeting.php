<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'dateTime', 'duration', 'timezone', 'name', 'email', 'phone_no', 'message', 'ip', 'country_code', 'country_phone_code'];
}
