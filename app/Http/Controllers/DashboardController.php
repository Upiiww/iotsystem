<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
// In your controller method

public function index()
{
    $devices = Device::all(); // or any other query to retrieve devices
    return view('pages.coba', compact('devices'));
}
}
