<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{
    public function index()
    {
        $notification= DB::table('notifications')->get();
        $industry= DB::table('industries')->get();
        return view('Front-end.notification',compact('notification','industry'));
    }

}
