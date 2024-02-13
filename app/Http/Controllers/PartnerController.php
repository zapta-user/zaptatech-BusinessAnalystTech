<?php

namespace App\Http\Controllers;

use App\Mail\PartnerMail;
use App\Models\Partner;
use App\Models\PartnerDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    public function store(Request $request)
    {
        $partner = Partner::create([
            'type' => $request->type,
            'company_name' => $request->company_name,
            'name' => $request->user_name ?? $request->name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'service' => $request->service
        ]);
        PartnerDomain::create([
            'partner' => $partner->id,
            'domain' => implode(',', $request->domains)
        ]);
        $admin_email = ['ateeqasif1168@gmail.com'];
        Mail::send(new PartnerMail($partner, $request->email, 'user'));
        Mail::send(new PartnerMail($partner, $admin_email, 'admin'));
        return request()->json(['message' => 'Partner request sent successfully'], 200);
    }
}
