<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Servicecategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index($id)
    {
        $sub = Servicecategory::where('id',$id)->first();
        $data = Service::where('service_cat', $id)->get();
        return view('frontend.service',compact('data','sub'));
    }

    public function solution($id)
    {

        $data = Industry::where('id', $id)->first();
        return view('frontend.trackwise',compact('data'));
    }
        public function serviceDetail($id)
    {

        $data = Service::find($id);
        $data->cat = Servicecategory::where('id',$id)->value('name');
        $html = "";
       if(!empty($data)){
           $html = '<div class="image">
            <img src="https://web.venturingdigitally.com/uploads/image/'.$data->photo.'"alt="..." class="w-100 h-100">
        </div>
        <div class="title">'.
           $data->name
        .'</div>
        <div class="content">'.
           $data->dis
        .'</div>';
       }
        $response['html'] = $html;

      return response()->json($response);
       
    }

}
