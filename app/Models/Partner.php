<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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


    // public function domainNames()
    // {
    //     return $this->hasManyThrough(
    //         Domain::class,
    //         PartnerDomain::class,
    //         'partner', // Foreign key on the partner_domains table
    //         'id', // Local key on the partners table
    //         'id', // Local key on the domains table
    //         'domain' // Foreign key on the partner_domains table
    //     );
    // }
    public function domainNames()
    {
        $domains = $this->domains;
        $domainIds = $domains->flatMap(function ($domain) {
            return explode(',', $domain->pivot->domain);
        });
        $domainNames = Domain::whereIn('id', $domainIds)->pluck('name');
        return $domainNames;
    }

    public function domains()
    {
        return $this->belongsToMany(Domain::class, 'partner_domains', 'partner', 'domain');
    }

    public function serviceName()
    {
        return $this->hasOne(Service::class, 'id', 'service');
    }
}
