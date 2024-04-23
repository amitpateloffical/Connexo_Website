<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $service= DB::table('services')->get();
        $industry= DB::table('industries')->get();
        $client= DB::table('clients')->get();
        $notification= DB::table('notifications')->get();
        $feedback= DB::table('feedback')->get();
        $equipment= DB::table('equipment')->get();
        return view('Front-end.index',compact('service','industry','notification','client','feedback','equipment'));
    }

}
