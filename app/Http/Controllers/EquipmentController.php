<?php

namespace App\Http\Controllers;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class equipmentController extends Controller
{
    public function index()
    {
        $equipment= DB::table('equipment')->get();
        return view('admin.equipment.index',compact('equipment'));
    }


    public function create()
    {
        return view('admin.equipment.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new Equipment;
      $result->name = $data['name'];
    if ($request->hasfile('photo')) {

      $file = $request->file('photo');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->photo = $filename;

    }

     $result->save();

        return redirect()->route('ad-equipment.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $equipment=Equipment::get();
        return view('admin.equipment.index',compact('equipment'));
    }



    public function update($id,Request $request)
    {
        $result = Equipment::find($id);
        $data = $request->all();
       $result->name = $data['name'];

    if ($request->hasfile('photo')) {

      $file = $request->file('photo');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->photo = $filename;

    }

     $result->save();

        return redirect()->route('ad-equipment.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $equipment = Equipment::find($id);
        return view('admin.equipment.edit',['equipment' => $equipment]);
    }
    public function destroy($id)
    {
        $equipment=Equipment::find($id);
        $equipment->delete();

        return redirect()->route('ad-equipment.index')
            ->with('success','Deleted successfully');
    }
}
