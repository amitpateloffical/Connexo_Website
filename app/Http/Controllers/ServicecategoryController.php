<?php
namespace App\Http\Controllers;
use App\Models\Servicecategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicecategoryController extends Controller
{
    public function index()
    {
        $service= DB::table('servicecategories')->get();
        return view('admin.servicecategory.index',compact('service'));
    }


    public function create()
    {
        return view('admin.servicecategory.add');
    }

    public function store(Request $request)
    {
      
    $data = $request->all();
    $result = new Servicecategory;
      $result->name = $data['name'];
   $result->description = $data['description'];


     $result->save();

        return redirect()->route('ad-servicecategory.index')
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
        $result = Servicecategory::find($id);
        $data = $request->all();
  
      $result->name = $data['name'];
   $result->description = $data['description'];


     $result->save();

        return redirect()->route('ad-servicecategory.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $service = Servicecategory::find($id);
        return view('admin.servicecategory.edit',['service' => $service]);
    }
    public function destroy($id)
    {
        $service=Servicecategory::find($id);
        $service->delete();

        return redirect()->route('ad-servicecategory.index')
            ->with('success','Deleted successfully');
    }
}
