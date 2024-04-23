<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Client;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $notificationcount = Notification::count();
        $clientcount = Client::count();
        $industrycount = Industry::count();
        $servicecount = Service::count();
        return view('admin.dashboard',compact('servicecount','industrycount','notificationcount','clientcount'));
    }



}
