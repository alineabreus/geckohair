<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->paginate(15);

        return view('services.index')->with(compact('services'));
    }
}
