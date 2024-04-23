<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index()
    {
        $client= DB::table('clients')->get();
        return view('Front-end.our-clients',compact('client'));
    }

}
