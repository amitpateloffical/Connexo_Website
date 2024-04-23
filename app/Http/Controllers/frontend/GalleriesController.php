<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleriesController extends Controller
{
    public function index()
    {
        $gallery= DB::table('galleries')->get();
        $industry= DB::table('industries')->get();
        return view('Front-end.gallery',compact('gallery','industry'));
    }

}
