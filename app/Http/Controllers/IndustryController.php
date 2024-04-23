<?php

namespace App\Http\Controllers;
use App\Models\Solutioncategory;
use App\Models\Industry;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $industry= DB::table('industries')->get();
        return view('admin.industry.index',compact('industry'));
    }


    public function create()
    {
        $data= Solutioncategory::all();
        return view('admin.industry.add',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new Industry;

      $result->title = $data['title'];
   $result->desc = $data['desc'];
    if ($request->hasfile('img')) {

      $file = $request->file('img');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->img = $filename;

    }

     $result->save();

        return redirect()->route('ad-industry.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $industry=Industry::get();
        return view('admin.industry.index',compact('industry'));
    }



    public function update($id,Request $request)
    {
        
        $result = Industry::find($id);
         $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $data = $request->all();

       $result->title = $data['title'];
   $result->desc = $data['desc'];
    if ($request->hasfile('img')) {

      $file = $request->file('img');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->img = $filename;

    }

     $result->save();

        return redirect()->route('ad-industry.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $data = Solutioncategory::all();
        $industry = Industry::find($id);
        return view('admin.industry.edit',['industry'=> $industry, 'data' => $data]);
    }
    public function destroy($id)
    {
        $industry=Industry::find($id);
        $industry->delete();

        return redirect()->route('ad-industry.index')
            ->with('success','Deleted successfully');
    }
}
