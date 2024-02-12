<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'company_name',
        'name',
        'phone_no',
        'email',
        'service'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
