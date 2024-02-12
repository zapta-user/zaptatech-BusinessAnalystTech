<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DomainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $domains = Domain::get();
        $domainView = View::make('partials.domains', compact('domains'))->render();
        $services = Service::get();
        $serviceView = View::make('partials.services', compact('services'))->render();
        return response()->json(['message' => 'Data retrieved Successfully', 'domainView' => $domainView, 'serviceView' => $serviceView]);
    }
}
