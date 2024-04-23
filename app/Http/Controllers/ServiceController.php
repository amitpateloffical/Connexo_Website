<?php

namespace App\Http\Controllers;
use App\Models\Servicecategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $service= DB::table('services')->get();
        return view('admin.service.index',compact('service'));
    }


    public function create()
    {
        $data= Servicecategory::all();
        return view('admin.service.add',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([  
        'service_cat'=>  'required',
        
        'name'=>'required|min:5',
        'dis' => 'required|min:20',
        'photo' => 'required|mimes:png,jpg,jpeg|max:2048' ]);  
    $data = $request->all();
    $result = new Service;
    $result->service_cat = $data['service_cat'];
      $result->name = $data['name'];
   $result->dis = $data['dis'];
    if ($request->hasfile('photo')) {

      $file = $request->file('photo');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->photo = $filename;

    }

     $result->save();

        return redirect()->route('ad-service.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $service=Service::get();
        return view('admin.service.index',compact('service'));
    }



    public function update($id,Request $request)
    {
        $request->validate([  
        'service_cat'=>  'required',
        
        'name'=>'required|min:5',
        'dis' => 'required|min:20',
        'photo' => 'mimes:png,jpg,jpeg|max:2048' ]); 
        $result = Service::find($id);
        $data = $request->all();
        $result->service_cat = $data['service_cat'];
       $result->name = $data['name'];
   $result->dis = $data['dis'];
    if ($request->hasfile('photo')) {

      $file = $request->file('photo');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->photo = $filename;

    }

     $result->save();

        return redirect()->route('ad-service.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $data= Servicecategory::all();
        $service = Service::find($id);
        return view('admin.service.edit',['service' => $service,'data' =>$data]);
    }
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();

        return redirect()->route('ad-service.index')
            ->with('success','Deleted successfully');
    }
}
