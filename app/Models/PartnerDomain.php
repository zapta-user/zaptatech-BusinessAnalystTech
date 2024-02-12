<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerDomain extends Model
{
    use HasFactory;
    protected $table = 'partner_domains';
    protected $fillable = [
        'partner',
        'domain'
    ];
}
