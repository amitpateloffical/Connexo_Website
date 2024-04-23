<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Equipment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class equipmentsController extends Controller
{
    public function index()
    {
        $equipment= DB::table('equipment')->get();
        $industry= DB::table('industries')->get();
        return view('Front-end.equipments',compact('equipment'));
    }

}
