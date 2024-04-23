<?php
namespace App\Http\Controllers;
use App\Models\Solutioncategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolutioncategoryController extends Controller
{
    public function index()
    {
        $service= DB::table('solutioncategories')->get();
        return view('admin.solutioncategory.index',compact('service'));
    }


    public function create()
    {
        return view('admin.solutioncategory.add');
    }

    public function store(Request $request)
    {

    $data = $request->all();
    $result = new Solutioncategory;
      $result->name = $data['name'];
   $result->description = $data['description'];


     $result->save();

        return redirect()->route('ad-solutioncategory.index')
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
        $result = Service::find($id);
        $data = $request->all();
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
        $service = Service::find($id);
        return view('admin.service.edit',['service' => $service]);
    }
    public function destroy($id)
    {
        $service=Solutioncategory::find($id);
        $service->delete();

        return redirect()->route('ad-solutioncategory.index')
            ->with('success','Deleted successfully');
    }
}
